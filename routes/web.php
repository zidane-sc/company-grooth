<?php

use App\User;
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
        $user = count(User::all());
        return view('server.dashboard', ['user' => $user]);
    })->middleware('auth')->name('dashboard');

    // User
    Route::get('users', 'UserController@index')->name('users.index');
    Route::get('users/create', 'UserController@create')->name('users.create');
    Route::post('users', 'UserController@store')->name('users.store');
    Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::patch('users/{id}', 'UserController@update')->name('users.update');
    Route::delete('users/{id}', 'UserController@destroy')->name('users.destroy');

    // Manage Website
    Route::group(['prefix' => 'manage-website'], function () {
        // -- Banner
        Route::get('banners', 'BannerController@index')->name('banners.index');   
        Route::get('banners/create', 'BannerController@create')->name('banners.create');
        Route::post('banners', 'BannerController@store')->name('banners.store');
        Route::get('banners/{id}/edit', 'BannerController@edit')->name('banners.edit');
        Route::patch('banners/{id}', 'BannerController@update')->name('banners.update');
        Route::delete('banners/{id}', 'BannerController@destroy')->name('banners.destroy');

        // -- Visi & Misi
        Route::get('visi-misi', 'VisiMisiController@index')->name('visi-misi.index');   
        Route::post('visi-misi', 'VisiMisiController@store')->name('visi-misi.store');
        Route::patch('visi-misi/{id}', 'VisiMisiController@update')->name('visi-misi.update');

        // -- Portfolio
        Route::get('portfolios', 'PortfolioController@index')->name('portfolios.index');   
        Route::get('portfolios/create', 'PortfolioController@create')->name('portfolios.create');
        Route::post('portfolios', 'PortfolioController@store')->name('portfolios.store');
        Route::get('portfolios/{id}/edit', 'PortfolioController@edit')->name('portfolios.edit');
        Route::patch('portfolios/{id}', 'PortfolioController@update')->name('portfolios.update');
        Route::delete('portfolios/{id}', 'PortfolioController@destroy')->name('portfolios.destroy');

        // -- Portfolio
        Route::get('teams', 'TeamController@index')->name('teams.index');   
        Route::get('teams/create', 'TeamController@create')->name('teams.create');
        Route::post('teams', 'TeamController@store')->name('teams.store');
        Route::get('teams/{id}/edit', 'TeamController@edit')->name('teams.edit');
        Route::patch('teams/{id}', 'TeamController@update')->name('teams.update');
        Route::delete('teams/{id}', 'TeamController@destroy')->name('teams.destroy');
    });
    
    
});



/*===================================================================*/
// Frontend
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainController@home')->name('main.home');
Route::get('/portfolio', 'MainController@portfolio')->name('main.portfolio');
Route::get('/about', 'MainController@about')->name('main.about');
Route::get('/article', 'MainController@article')->name('main.article');
Route::get('/contact', 'MainController@contact')->name('main.contact');
