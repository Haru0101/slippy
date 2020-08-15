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
// Auth::routes();

// REST
// Route::resource('contacts', 'ContactFormController')->only([
//     'index', 'show'
// ]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
