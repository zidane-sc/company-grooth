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

<<<<<<< HEAD
    Route::get('/dashboard', function () {
        return view('server.dashboard');
    });

=======
    Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> fc91d0ebc4fce7dfc71dd6a28d1b91e2e30c8cfc
});



/*===================================================================*/
// Frontend
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainController@index')->name('main.index');
