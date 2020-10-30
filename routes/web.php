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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', "register");
Route::view('/register', "register");
Route::view('/login', "login");
Route::view('/homepage', "homepage");
Route::view('/book', "bookdata");
Route::view('/peminjam', "peminjam");
Route::view('/profile', "profile");
Route::view('/book-plus', "bookplus");

// Route::view('/navbar', "includes.navbar");

Route::post('/register', "UserController@signup");
Route::post('/login', "UserController@signin");
Route::get('/logout', "UserController@logout");

Route::get('/book', "UserController@showBook");
Route::post('/book', "UserController@searchBook");

Route::get('/peminjam', "UserController@showPeminjam");
Route::post('/peminjam', "UserController@searchPeminjam");

Route::post('/book-plus', "UserController@bookPlus");

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
