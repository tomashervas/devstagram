<?php

use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');