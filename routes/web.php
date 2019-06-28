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

Route::get('/', function () {
    return view('user.welcome');
});
Route::get('/post',function (){
    return view('user.post');
});
Route::get('/admin',function (){
    return view('admin.home');
});
Route::get('admin/post',function(){
    return view('admin.post.post');
});