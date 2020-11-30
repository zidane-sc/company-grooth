<?php

use Illuminate\Support\Facades\Auth;
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

// Backend
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();

    Route::get('/dashboard', function () {
        return view('server.dashboard');
    });
});



/*===================================================================*/
// Frontend
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainController@index')->name('main.index');
Route::get('/about', 'MainController@about')->name('main.about');
Route::get('/blog', 'MainController@blog')->name('main.blog');
Route::get('/contact', 'MainController@contact')->name('main.contact');
