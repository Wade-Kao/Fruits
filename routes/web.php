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

// //網頁
Route::get('/', function () {
    return view('welcome');
});

// // 轉址
// Route::get('redirect', function () {
//     return redirect(url('hello'));
// });

// // 轉址
// Route::get('baha', function () {
//     return redirect('https://goblinlab.org');
// });

// Route::get('/hello', function () {
//     return 'hello~';
// });

// Route::get('user/{id}', function ($id) {
//     return 'User ' . $id;
// });

// Route::get('user/{id}/coursrs/{coursrs}', 'HomeController@signup');

// Route::resource('posts', 'PostController');

Route::resource('items', 'ItemController');
// Route::get('user/{id}/coursrs/{coursrs}', function ($id, $coursrs) {
//     return 'User ' . $id . ',coursrs ' . $coursrs;
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::resource('branchstocks', 'BranchStockController');

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('index', 'HomeController@index');

// Route::get('itemsave', 'ItemController@store');
// Route::post(‘tasks’,[‘as’ =>
// ‘tasks.store’,’uses’=>’TasksController@store’]);

// Route::get('/usershow/{UNo}', 'ListUsersController@index');
// Route::get('/userupdate/{id}', 'ListUsersController@update');
// Route::get('/userdestroy/{id}', 'ListUsersController@destroy');
// Route::resource('userlist', 'ListUsersController');
// Route::resource('userbranchlist', 'BranchListUsersController');
// Route::get('/ubl/{id}', 'BranchListUsersController@show');
// Route::get('/test/{id}', 'ListUsersController@test');

// Route::get('/menu', function () {
//     return menu('frontend', 'Mymenu');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/who', 'BranchStockController@who');
Route::get('/selflogin', 'BranchStockController@selflogin');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
