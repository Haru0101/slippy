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

// tests/testというアドレスにアクセスしたら、
// TestControllerのindexというメソッドの処理を走らせる
Route::get('tests/test', 'TestController@index');

Route::get('contact/index', 'ContactFormController@index');
// contact/〜というルーティングをグループ化
// さらにmiddlewareの指定で認証してようやくアクセスできるようにする
Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
    Route::get('index', 'ContactFormController@index')->name('contact.index');
    Route::get('create', 'ContactFormController@create')->name('contact.create');
});
Auth::routes();

// REST
// Route::resource('contacts', 'ContactFormController')->only([
//     'index', 'show'
// ]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
