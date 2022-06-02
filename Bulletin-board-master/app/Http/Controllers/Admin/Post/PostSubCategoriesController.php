<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts\PostSubCategory;

class PostSubCategoriesController extends Controller
{
    //

    public function newSub(Request $request ){
        $usb = $request->input('sub-categories');

        PostSubCategory::create([
            'sub_category' => $sub
        ]);

        return view('posts.categories');

    }
}
