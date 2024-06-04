<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');

// Route::redirect('/', '/index', 301);

// Route::get('/index', [HomeController::class, 'index'])->name('home.index');
// Route::get('/service', [HomeController::class, 'service'])->name('home.service');
