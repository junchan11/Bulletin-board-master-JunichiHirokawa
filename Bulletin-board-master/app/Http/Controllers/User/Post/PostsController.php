<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //
    public function index(){

    $lists=Post::get();

    return view ('posts,index',compact('lists','list'));
}

}
