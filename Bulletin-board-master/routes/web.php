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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [App\Http\Controllers\Auth\Login\LoginController::class,'login']);
Route::post('/login', [App\Http\Controllers\Auth\Login\LoginController::class,'login']);

Route::get('/top',[App\Http\Controllers\User\Post\PostsController::class,'index']);
