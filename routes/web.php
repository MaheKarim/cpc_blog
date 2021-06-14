<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/users', 'HomeController@userlist')->name('user.list');

Route::get('/user', 'UserController@index')->name('user.homepage');
Route::get('/admin', 'AdminController@index')->name('admin.homepage');


// CRUD START
Route::get('/post', 'PostController@index')->name('post.index');
Route::post('post-create', 'PostController@store')->name('post.store');
//  INDEX ->  Data Show
// CREATE -> Show Form GET Method ->
// STORE ->  POST Method
// UPDATE ->
// DELETE ->
