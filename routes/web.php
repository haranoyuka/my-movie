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

Auth::routes();

use App\Http\Controllers\Alice\MovieController;
Route::controller(MovieController::class)->middleware('auth')->group(function() {
    Route::get('/top', 'add')->name('movie.add');
    Route::get('movie/create', 'set')->name('movie.set');
    Route::post('movie/create', 'create')->name('movie.create');
    Route::get('movie', 'index')->name('movie.index');
    Route::get('movie/edit', 'edit')->name('movie.edit');
    Route::post('movie/edit', 'update')->name('movie.update');
    Route::get('movie/delete', 'delete')->name('news.delete');

});

use App\Http\Controllers\MovieController as PublicMovieController;
Route::get('/', [PublicMovieController::class, 'index'])->name('movie.index');

    use App\Http\Controllers\Alice\RankingController;
    Route::controller(RankingController::class)->middleware('auth')->group(function() {
    Route::get('movie/ranking', 'look')->name('movie.look');
    Route::post('movie/ranking', 'ranking')->name('movie.ranking');
    Route::get('movie/year', 'sort')->name('movie.sort');
    Route::post('movie/year', 'year')->name('movie.year');
});

    use App\Http\Controllers\Alice\YearController;
    Route::controller(RankingController::class)->middleware('auth')->group(function() {
    Route::get('movie/year', 'sort')->name('movie.sort');
    Route::post('movie/year', 'year')->name('movie.year');
});


