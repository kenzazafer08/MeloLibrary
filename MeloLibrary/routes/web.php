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
    Route::get('/{id}/edit', [App\Http\Controllers\artistcontroller::class, 'edit'])->name('artist.edit');
    Route::delete('/{id}', [App\Http\Controllers\artistcontroller::class, 'destroy'])->name('artist.destroy');
    Route::put('/{id}', [App\Http\Controllers\artistcontroller::class, 'update'])->name('artist.update');
});

Route::prefix('/cat')->middleware('admin')->group(function (){
    Route::get('/', [App\Http\Controllers\catcontroller::class, 'index']);
    Route::get('/create', [App\Http\Controllers\catcontroller::class, 'create']);
    Route::post('/insert', [App\Http\Controllers\catcontroller::class, 'store']);
    Route::get('/{id}/edit', [App\Http\Controllers\catcontroller::class, 'edit'])->name('cat.edit');
    Route::delete('/{id}', [App\Http\Controllers\catcontroller::class, 'destroy'])->name('cat.destroy');
    Route::put('/{id}', [App\Http\Controllers\catcontroller::class, 'update'])->name('cat.update');
});

Route::prefix('/song')->middleware('admin')->group(function (){
    Route::get('/', [App\Http\Controllers\songcontroller::class, 'index']);
    Route::get('/create', [App\Http\Controllers\songcontroller::class, 'create']);
    Route::post('/insert', [App\Http\Controllers\songcontroller::class, 'store']);
    Route::get('/{id}/show', [App\Http\Controllers\songcontroller::class, 'show'])->name('song.show');
    Route::get('/{id}/edit', [App\Http\Controllers\songcontroller::class, 'edit'])->name('song.edit');
    Route::put('/{id}', [App\Http\Controllers\songcontroller::class, 'update'])->name('song.update');
    Route::delete('/{id}', [App\Http\Controllers\songcontroller::class, 'destroy'])->name('song.destroy');
    Route::post('/{id}/removeartist/', [App\Http\Controllers\songcontroller::class, 'remove_artist'])->name('song.removeartist');
    Route::post('/{id}/removeband/', [App\Http\Controllers\songcontroller::class, 'remove_band'])->name('song.removeband');
    Route::post('/{id}/removecat/', [App\Http\Controllers\songcontroller::class, 'remove_cat'])->name('song.removecat');
    Route::get('/{id}/addartist/', [App\Http\Controllers\songcontroller::class, 'addartist'])->name('song.addartist');
    Route::get('/{id}/addband/', [App\Http\Controllers\songcontroller::class, 'addband'])->name('song.addband');
    Route::get('/{id}/addcat/', [App\Http\Controllers\songcontroller::class, 'addcat'])->name('song.addcat');
});

Route::get('/user', [App\Http\Controllers\usercontroller::class, 'index'])->middleware('admin');

Route::prefix('/band')->middleware('admin')->group(function (){
    Route::get('/', [App\Http\Controllers\bandcontroller::class, 'index']);
    Route::get('/create', [App\Http\Controllers\bandcontroller::class, 'create']);
    Route::post('/insert', [App\Http\Controllers\bandcontroller::class, 'store']);
    Route::get('{id}/add', [App\Http\Controllers\bandcontroller::class, 'add'])->name('band.add');;
    Route::get('/{id}/edit', [App\Http\Controllers\bandcontroller::class, 'edit'])->name('band.edit');
    Route::get('/{id}/show', [App\Http\Controllers\bandcontroller::class, 'show'])->name('band.show');
    Route::delete('/{id}', [App\Http\Controllers\bandcontroller::class, 'destroy'])->name('band.destroy');
    Route::put('/{id}', [App\Http\Controllers\bandcontroller::class, 'update'])->name('band.update');
    Route::post('/{id}', [App\Http\Controllers\bandcontroller::class, 'remove'])->name('band.remove');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('reauth');
