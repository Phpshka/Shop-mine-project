<?php


namespace App\Http\Controllers;


use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;

class ItemDetailsController
{

    public function show($id)
    {
        $item = Item::find($id);
        $brands = Brand::all();
        $categories =Category::all();
        return view('itemDetails', compact('item', 'brands', 'categories'));
    }



}