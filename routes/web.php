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

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::namespace('Admin')->prefix('admin')->group(function (){
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::namespace('Auth')->group(function (){
        Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'LoginController@login');
        Route::post('/logout', 'LoginController@logout')->name('admin.logout');

    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('post', 'PostController')->middleware('auth:admin');

Route::get('/refueling', 'CarController@calc');

Route::get('/home', 'HomeController@index')->name('home');


