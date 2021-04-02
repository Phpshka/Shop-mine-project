<?php


namespace App\Http\Controllers;


use App\Models\Post;

class NewsDetailsController
{





    public function show($id)
    {
        $new = Post::find($id);
        return view('newsDetails', compact('new'));
    }

}