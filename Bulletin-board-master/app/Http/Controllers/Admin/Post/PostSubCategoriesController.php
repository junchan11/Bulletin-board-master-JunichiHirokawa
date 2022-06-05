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
        $sub = $request->input('sub-categories');
        $id = $request->input('main-categories-id');


        PostSubCategory::create([
            'sub_category' => $sub,
            'post_main_category_id' => $id
        ]);

        return redirect('/categories');

    }
}
