<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin')->except(['index', 'show']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $items = Item::paginate(3);
        return view('home', compact('items'));
    }


    public function show()
    {
        $news = Post::all();

        return view('news',  compact('news'));
    }




    public function dashboard()
    {

    }

    public function store()
    {

        $users = User::all();
        return view('/admin/index', compact('users'));


    }


    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        $user->destroy($id);
        return redirect('/admin');
    }

}



