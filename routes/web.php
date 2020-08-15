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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
