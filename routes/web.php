<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    
});

// Route::get('/dashboard', function () {
//     return view('layouts.mahasiswa.dashboard');

// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
