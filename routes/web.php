<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorController;

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

Route::get('/', [WelcomeController::class, 'show']);

Route::get('about', [WelcomeController::class, 'about']);

Route::get('movies', [MovieController::class, 'index'])->name('movies.index');
Route::post('movies', [MovieController::class, 'store'])->name('movies.store');
Route::get('movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::get('movies/{movie}', [MovieController::class, 'show'])->name('movies.show');
Route::get('movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');


Route::get('actors/{actor}', [ActorController::class, 'show'])->name('actors.show');
