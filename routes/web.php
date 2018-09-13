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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

// Route::get('login', function () {
//     return view('login');
// });

Route::get('login', ['uses'=>'UserController@login']);

Route::post('register', ['uses'=>'UserController@store']);



Route::get('signup', function () {
    return view('signup');
});

Route::get('product', function () {
    return view('product');
});

Route::get('services', function () {
    return view('services');
});

Route::get('index', function () {
    return view('index');
});

Route::resource('posts','PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
