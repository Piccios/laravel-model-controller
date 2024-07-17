<?php

use App\Http\Controllers\Guest\PageController as GuestPageController;
use App\Http\Controllers\Guest\MovieController as GuestMovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [GuestMovieController::class, 'index'])->name('guest.movies');
