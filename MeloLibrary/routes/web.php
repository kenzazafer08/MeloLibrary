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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('reauth');

Route::get('/Search', function () {
    return view('search');
})->middleware('auth');

Route::get('/Biblio', function () {
    return view('biblio');
})->middleware('auth');

Route::get('/Likes', function () {
    return view('likes');
})->middleware('auth');

Route::get('/Admin', function () {
    return view('Admin.admin');
})->middleware('admin');

Route::get('/artist', function () {
    return view('Admin.artist');
})->middleware('admin');

Route::get('/song', function () {
    return view('Admin.song');
})->middleware('admin');

Route::get('/cat', function () {
    return view('Admin.cat');
})->middleware('admin');

Route::get('/user', function () {
    return view('Admin.user');
})->middleware('admin');

Route::get('/band', function () {
    return view('Admin.band');
})->middleware('admin');
