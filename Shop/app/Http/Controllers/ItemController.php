<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddItemRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\Size;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Translation\MessageSelector;

class ItemController extends Controller
{
    const PATH = 'admin.items.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Item::paginate(3);
        $brands = Brand::all();
        $categories = Category::all();
        return view(self::PATH . 'index', compact('items', 'brands', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddItemRequest $request)
    {
        $item = Item::create($request->except('sizes'));

        $sizes = $request->get('sizes');
        foreach ($sizes as $size){
            Size::create(['item_id'=>$item->id, 'size_id'=> $size]);
        }
        $file = $request->file('itemImage');
        $path = 'images/' . $file->getClientOriginalName();
        $file->move('images/',$file->getClientOriginalName());

        ItemImage::create(['url'=>$path, 'item_id'=>$item->id]);
        return redirect('/admin/item');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        $brands = Brand::all();
        $categories =Category::all();
        return view(self::PATH . 'show', compact('item', 'brands', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(AddItemRequest $request)
    {

        Item::where('id', $request->get('id'))->update($request->except('id', '_method', '_token'));

        return redirect('/admin/item');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $item = Item::find($id);
            $item->destroy($id);
        return redirect('/admin/item');
    }


    public function addToCart(Request $request){

        $item = Item::where('id', $request->get('id'))->first();
        $cartItem = Cart::add($item, 1,['size' => 'large']);
        $cartItem->associate('Item');
        return $cartItem;
    }

    public function search(Request $request){
        $searchKey = $request->get('key');
        $brand = $request->get('brand');
        $gender = $request->get('gender');
        $startPrice = $request->get('start');
        $endPrice = $request->get('end');
        $items = Item::all();
        if($brand!=null){
            $items = $items->filter(function ($item) use ($brand){
                return $item->brand_id==$brand;
            });
        }
        if($gender != null){
            $items = $items->filter(function ($item) use ($gender){
                return $item->gender==$gender;
            });
        }

        if($startPrice != null){
            $items = $items->filter(function ($item) use ($startPrice){
                return $item->price>=$startPrice;
            });
        }
        if($endPrice != null){
            $items = $items->filter(function ($item) use ($endPrice){
                return $item->price<=$endPrice;
            });
        }

        if($searchKey){
            $items = $items->filter(function ($item) use ($searchKey){
                return str_contains($item->name,$searchKey);
            });

        }






        $brands = Brand::all();

        return view('itemsByCategory', compact('items', 'brands'));
    }


}

