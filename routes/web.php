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

// Route::get('/', function () {
//     return view('posts/index');
// });

//この1行で自動でCRUDに対応するルーティングを設定してくれます。
// Route::resource('/', 'PostController');

Route::get("/","PostController@index");
Route::get('post/new', 'PostController@new');
Route::post('post/create', 'PostController@create')->name('post.create'); // 保存
Route::get('post/create', 'PostController@create')->name('post.create'); // 作成
Route::get('post/', 'PostController@show');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


