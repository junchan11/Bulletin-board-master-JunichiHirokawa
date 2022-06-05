<?php

namespace App\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use App\Models\Posts\PostMainCategory;
use App\Models\Posts\PostSubCategory;

class PostsController extends Controller
{
    //
    public function index(){

    $list=\DB::table('posts')->get();

    return view ('posts.index',['list'=>$list]);
}

    public function categories(){

        $lists = PostMainCategory::get();
        $subs = PostSubCategory::with('main')->get();//with('リレーション名')


        return view ('posts.categories',compact('lists','subs'));

    }

}
