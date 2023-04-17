<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ConferencesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', static function () {
    return redirect('/conferences');
})->name('redirect-conferences');

Route::resource('conferences', ConferencesController::class);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::middleware('auth')->group(function () {
//    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
//    Route::post('login', [LoginController::class, 'login'])->name('login');
//    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
//});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

