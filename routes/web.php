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

//網頁
Route::get('/', function () {
    return view('welcome');
});

// 轉址
Route::get('redirect', function () {
    return redirect(url('hello'));
});

// 轉址
Route::get('baha', function () {
    return redirect('https://goblinlab.org');
});

Route::get('/hello', function () {
    return 'hello~';
});

Route::get('user/{id}', function ($id) {
    return 'User ' . $id;
});

Route::get('user/{id}/coursrs/{coursrs}', 'HomeController@signup');

Route::resource('posts', 'PostController');
Route::resource('Items', 'ItemController');
// Route::get('user/{id}/coursrs/{coursrs}', function ($id, $coursrs) {
//     return 'User ' . $id . ',coursrs ' . $coursrs;
// });

// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('index', 'HomeController@index');
