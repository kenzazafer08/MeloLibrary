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


Route::get('/', [App\Http\Controllers\homecontroller::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\homecontroller::class, 'index'])->name('home')->middleware('reauth');
Route::get('/song/{id}',[App\Http\Controllers\homecontroller::class,'show'])->name('song')->middleware('auth');
Route::get('/Search', [App\Http\Controllers\searchcontroller::class, 'index'])->middleware('auth');
Route::get('/search', [App\Http\Controllers\searchcontroller::class, 'read'])->name('search')->middleware('auth');
Route::get('/categorie/{id}', [App\Http\Controllers\searchcontroller::class, 'show'])->name('categorie')->middleware('auth');
Route::get('/showartist',[App\Http\Controllers\artistcontroller::class, 'index'])->middleware('auth');
Route::get('/details/{id}',[App\Http\Controllers\artistcontroller::class, 'show'])->name('show.artist')->middleware('auth');
Route::get('/showband',[App\Http\Controllers\bandcontroller::class, 'index'])->middleware('auth');
Route::get('/detailband/{id}',[App\Http\Controllers\bandcontroller::class, 'show'])->name('band')->middleware('auth');
Route::get('/songsband/{id}',[App\Http\Controllers\bandcontroller::class, 'showsongs'])->name('show.bandsongs')->middleware('auth');
Route::get('/songLike/{id}',[App\Http\Controllers\likescontroller::class, 'store'])->name('like.song')->middleware('auth');
Route::get('/songComment/{id}',[App\Http\Controllers\commentcontroller::class, 'store'])->name('store.comment')->middleware('auth');
Route::delete('comment/{id}',[App\Http\Controllers\commentcontroller::class, 'remove'])->name('comment.remove')->middleware('auth');

Route::get('/Biblio', [App\Http\Controllers\playlistcontroller::class, 'index'])->middleware('auth');
Route::get('/songBiblio/{id}',[App\Http\Controllers\playlistcontroller::class, 'store'])->name('playlist.song')->middleware('auth');
Route::delete('/{id}',[App\Http\Controllers\playlistcontroller::class, 'remove'])->name('playlist.remove')->middleware('auth');

Route::get('/Admin', [App\Http\Controllers\admincontoller::class, 'index'])->middleware('admin');
Route::get('/user', [App\Http\Controllers\usercontroller::class, 'index'])->middleware('admin');

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
    Route::get('/add', [App\Http\Controllers\songcontroller::class, 'create'])->name('song.create');
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

