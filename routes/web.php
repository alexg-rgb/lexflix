<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\MoviesDbController;


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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', [MoviesController::class, 'index'])
    ->middleware('auth')
    ->name('movies');


Route::get('/movies/{movie}', 'App\Http\Controllers\MoviesController@show')
    ->middleware('auth')
    ->name('movies.show');



Route::get('/boMovies', [MoviesDbController::class, 'index'])
    ->middleware('auth')
    ->name('back.index');

Route::get('/boMovies/{movie}', 'App\Http\Controllers\MoviesDbController@show')
    ->middleware('auth')
    ->name('movies.showBack');

Route::post('create', [MoviesDbController::class, 'store'])
    ->middleware('auth')
    ->name('back.create');
