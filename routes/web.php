<?php

use App\Http\Controllers\ConferencesController;
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

Route::get('/', static function () {
    return redirect('/conferences');
})->name('redirect-conferences');

Route::resource('conferences', ConferencesController::class);

//Route::get('conferences/create', [ConferencesController::class, 'create'])->name('conferences.create');
//Route::post('conferences/store', [ConferencesController::class, 'store'])->name('conferences.store');
