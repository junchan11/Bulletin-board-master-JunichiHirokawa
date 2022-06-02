<?php

namespace App\Models\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;

class PostMainCategory extends Model
{
    protected $table = 'post_main_categories';

    protected $fillable = [
        'main_category',
    ];



    public function sub()
    {
        return $this->hasMany(PostSubCategory::class);
    }
}
