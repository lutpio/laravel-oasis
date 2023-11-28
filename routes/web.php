<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

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
    return view('welcome');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->middleware('guest');
Route::post('/register', [UserAuthController::class, 'registration'])->middleware('guest');

Route::post('/login', [UserAuthController::class, 'authenticate']);

Route::get('/dashboard', function () {
    return view('auth.index');
})->middleware('auth');
