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
    return view('welcome');
});


// 번개 톡
Route::resource('/bunge','BungeController');
// 번개 코맨트
Route::resource('/bungeComment','BungeCommentController');

// 유저

Route::resource('/user','UserController');