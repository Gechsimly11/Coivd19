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

Route::get('/', function () {
    return view('blade.home');
});
Route::get('/about', function () {
    return view('blade.about');
});

Route::get('/blog', function () {
    return view('blade.blog');
});

Route::get('/portfolio', function () {
    return view('blade.portfolio');
});
Route::get('/services', function () {
    return view('blade.services');
});
Route::get('/team', function () {
    return view('blade.team');
});

Route::get('/contact', function () {
    return view('blade.contact');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/dashboard', function () {
    return view('covids.dashboard');
});
Route::get('/create', function () {
    return view('messages.create');
});


Auth::routes();
Route::resource('blade', 'PostController');
Route::get('/home', 'HomeController@home');
Route::resource('/covids', 'CovidController');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/dashboard', 'CovidController@index')->name('dashboard');
Route::get('/contact', 'MessageController@index')->name('contact');
Route::resource('/messages', 'MessageController');
