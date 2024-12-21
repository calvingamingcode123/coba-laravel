<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('about',[
            "title" => "about",
            "about" => post::all()


        ]);
    }

    public function show($slug){
        return view('post', [
            "title" => 'single post',
            "new_post" => post::find($slug),
        ]);
    }
}
