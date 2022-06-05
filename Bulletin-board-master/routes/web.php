<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/login', [App\Http\Controllers\Auth\Login\LoginController::class,'login']);
Route::post('/login', [App\Http\Controllers\Auth\Login\LoginController::class,'login'])->name('login');


Route::get('/register', [App\Http\Controllers\Auth\Register\RegisterController::class,'register']);
Route::post('/new-account', [App\Http\Controllers\Auth\Register\RegisterController::class,'create']);

Route::get('/top',[App\Http\Controllers\User\Post\PostsController::class,'index']);

Route::get('/categories',[App\Http\Controllers\User\Post\PostsController::class,'categories']);
Route::post('/new-main-categories',[App\Http\Controllers\Admin\Post\PostMainCategoriesController::class,'newMain']);
Route::post('/new-main-categories',[App\Http\Controllers\Admin\Post\PostSubCategoriesController::class,'newSub']);


Route::get('/logout', [App\Http\Controllers\Auth\Login\LoginController::class,'logout']);
