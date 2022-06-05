<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts\PostMainCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;

class PostMainCategoriesController extends Controller
{
    //

    public function newMain(Request $request){
        $main = $request->input('main-categories');

        PostMainCategory::create([
            'main_category' => $main
        ]);

        return redirect('/categories');

    }


}
