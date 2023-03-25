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

Route::get('/Admin', [App\Http\Controllers\admincontoller::class, 'index'])->middleware('admin');

Route::prefix('/artist')->middleware('admin')->group(function (){
    Route::get('/', [App\Http\Controllers\artistcontroller::class, 'index']);
    Route::get('/create', [App\Http\Controllers\artistcontroller::class, 'create']);
    Route::post('/insert', [App\Http\Controllers\artistcontroller::class, 'store']);
});


Route::get('/song', function () {
    return view('Admin.song');
})->middleware('admin');

Route::get('/cat', function () {
    return view('Admin.cat');
})->middleware('admin');

Route::get('/user', [App\Http\Controllers\usercontroller::class, 'index'])->middleware('admin');

Route::get('/band', function () {
    return view('Admin.band');
})->middleware('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('reauth');
