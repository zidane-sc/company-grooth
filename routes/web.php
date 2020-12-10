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

    // Manage Home
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

        // -- Section One
        Route::get('section-one', 'SectionOneController@index')->name('section-one.index');
        Route::post('section-one', 'SectionOneController@store')->name('section-one.store');
        Route::patch('section-one/{id}', 'SectionOneController@update')->name('section-one.update');

        // -- Section Two
        Route::get('section-two', 'SectionTwoController@index')->name('section-two.index');
        Route::get('section-two/create', 'SectionTwoController@create')->name('section-two.create');
        Route::post('section-two', 'SectionTwoController@store')->name('section-two.store');
        Route::get('section-two/{id}/edit', 'SectionTwoController@edit')->name('section-two.edit');
        Route::patch('section-two/{id}', 'SectionTwoController@update')->name('section-two.update');
        Route::delete('section-two/{id}', 'SectionTwoController@destroy')->name('section-two.destroy');

        // -- Portfolio
        // Route::get('portfolios', 'PortfolioController@index')->name('portfolios.index');
        // Route::get('portfolios/create', 'PortfolioController@create')->name('portfolios.create');
        // Route::post('portfolios', 'PortfolioController@store')->name('portfolios.store');
        // Route::get('portfolios/{id}/edit', 'PortfolioController@edit')->name('portfolios.edit');
        // Route::patch('portfolios/{id}', 'PortfolioController@update')->name('portfolios.update');
        // Route::delete('portfolios/{id}', 'PortfolioController@destroy')->name('portfolios.destroy');
    });

    // Manage Contact Us
    Route::get('contact', 'ContactController@index')->name('contact.index');
    Route::post('contact', 'ContactController@store')->name('contact.store');
    Route::patch('contact/{id}', 'ContactController@update')->name('contact.update');

    // Manage Product
    Route::group(['prefix' => 'manage-product'], function () {
        // -- Products
        Route::get('products', 'ProductController@index')->name('products.index');
        Route::get('products/create', 'ProductController@create')->name('products.create');
        Route::post('products', 'ProductController@store')->name('products.store');
        Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
        Route::patch('products/{id}', 'ProductController@update')->name('products.update');
        Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');

        // -- Faqs
        Route::get('advantages', 'AdvantageController@index')->name('advantages.index');
        Route::get('advantages/create', 'AdvantageController@create')->name('advantages.create');
        Route::post('advantages', 'AdvantageController@store')->name('advantages.store');
        Route::get('advantages/{id}/edit', 'AdvantageController@edit')->name('advantages.edit');
        Route::patch('advantages/{id}', 'AdvantageController@update')->name('advantages.update');
        Route::delete('advantages/{id}', 'AdvantageController@destroy')->name('advantages.destroy');

        // -- Features
        Route::get('features', 'ProductFeatureController@index')->name('features.index');
        Route::get('features/create', 'ProductFeatureController@create')->name('features.create');
        Route::post('features', 'ProductFeatureController@store')->name('features.store');
        Route::get('features/{id}/edit', 'ProductFeatureController@edit')->name('features.edit');
        Route::patch('features/{id}', 'ProductFeatureController@update')->name('features.update');
        Route::delete('features/{id}', 'ProductFeatureController@destroy')->name('features.destroy');

        // -- Faqs
        Route::get('faqs', 'FaqController@index')->name('faqs.index');
        Route::get('faqs/create', 'FaqController@create')->name('faqs.create');
        Route::post('faqs', 'FaqController@store')->name('faqs.store');
        Route::get('faqs/{id}/edit', 'FaqController@edit')->name('faqs.edit');
        Route::patch('faqs/{id}', 'FaqController@update')->name('faqs.update');
        Route::delete('faqs/{id}', 'FaqController@destroy')->name('faqs.destroy');
    });

    // Manage About Us
    Route::group(['prefix' => 'manage-about'], function () {
        // -- Teams
        Route::get('teams', 'TeamController@index')->name('teams.index');
        Route::get('teams/create', 'TeamController@create')->name('teams.create');
        Route::post('teams', 'TeamController@store')->name('teams.store');
        Route::get('teams/{id}/edit', 'TeamController@edit')->name('teams.edit');
        Route::patch('teams/{id}', 'TeamController@update')->name('teams.update');
        Route::delete('teams/{id}', 'TeamController@destroy')->name('teams.destroy');
    });

    // Article
    Route::group(['prefix' => 'article'], function () {
        // -- Categories
        Route::get('categories', 'CategoryController@index')->name('categories.index');
        Route::get('categories/create', 'CategoryController@create')->name('categories.create');
        Route::post('categories', 'CategoryController@store')->name('categories.store');
        Route::get('categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
        Route::patch('categories/{id}', 'CategoryController@update')->name('categories.update');
        Route::delete('categories/{id}', 'CategoryController@destroy')->name('categories.destroy');

        // -- Tags
        Route::get('tags', 'TagController@index')->name('tags.index');
        Route::get('tags/create', 'TagController@create')->name('tags.create');
        Route::post('tags', 'TagController@store')->name('tags.store');
        Route::get('tags/{id}/edit', 'TagController@edit')->name('tags.edit');
        Route::patch('tags/{id}', 'TagController@update')->name('tags.update');
        Route::delete('tags/{id}', 'TagController@destroy')->name('tags.destroy');

        // -- Posts
        Route::get('posts', 'PostController@index')->name('posts.index');
        Route::get('posts/create', 'PostController@create')->name('posts.create');
        Route::post('posts/upload', 'PostController@upload')->name('posts.upload');
        Route::post('posts', 'PostController@store')->name('posts.store');
        Route::get('posts/{id}/edit', 'PostController@edit')->name('posts.edit');
        Route::patch('posts/{id}', 'PostController@update')->name('posts.update');
        Route::delete('posts/{id}', 'PostController@destroy')->name('posts.destroy');
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
Route::get('/contact', 'MainController@contact')->name('main.contact');
Route::get('/article', 'MainController@article')->name('main.article');
Route::get('aricle/detail/{slug}', 'MainController@detail')->name('main.detail');
Route::get('aricle/category/{slug}', 'MainController@category')->name('main.category');
Route::get('aricle/tag/{slug}', 'MainController@tag')->name('main.tags');
Route::get('/solution/{product}', 'MainController@solution')->name('main.solution');
