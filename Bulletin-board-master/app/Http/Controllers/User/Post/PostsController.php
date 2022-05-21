<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //
    public function index(){

    $list=\DB::table('posts')->get();

    return view ('posts.index',['list'=>$list]);
}

}
