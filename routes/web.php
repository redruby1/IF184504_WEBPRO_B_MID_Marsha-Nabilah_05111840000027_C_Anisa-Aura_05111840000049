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

Route::view('/navbar', "includes.navbar");

Route::post('/signup', "UserController@signup");
Route::post('/signin', "UserController@signin");


// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
