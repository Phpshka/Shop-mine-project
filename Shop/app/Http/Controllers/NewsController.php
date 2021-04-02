<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\Post;

class NewsController
{

    const PATH = 'admin.news.';



    public function index()
    {
        $news = Post::all();
        return view(self::PATH . 'index', compact('news') );
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
              'small'=>'required',
            'long'=>'required'
        ]);
        Post::create($request->all());
        return redirect('/admin/news');
    }


    public function show($id)
    {
        $new = Post::find($id);
        return view('admin.news.show', compact('new'));
    }


    public function update(Request $request, Post $new)
    {
        $request->validate([
            'title'=>'required',
            'small'=>'required',
            'long'=>'required',
            'id' => 'required'

        ]);
        $new = Post::find($request->id);
        $new->title = $request->get('title');
        $new->small = $request->get('small');
        $new->long = $request->get('long');
        $new->save();
        return redirect('/admin/news');

    }

    public function destroy(Request $request, $id)
    {
        $new = Post::find($id);
        $new->destroy($id);
        return redirect('/admin/news');
    }


}