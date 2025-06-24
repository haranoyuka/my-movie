<?php

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



use App\Http\Controllers\Alice\MovieController;
Route::controller(MovieController::class)->group(function() {
    Route::get('/', 'add')->middleware('auth');
    Route::get('movie/create', 'set')->name('movie.set');
    Route::post('movie/create', 'create')->name('movie.create');
    Route::get('movie', 'index')->name('movie.index');
    Route::get('movie/edit', 'edit')->name('movie.edit');
    Route::post('movie/edit', 'update')->name('movie.update');
    Route::get('movie/delete', 'delete')->name('news.delete');
});