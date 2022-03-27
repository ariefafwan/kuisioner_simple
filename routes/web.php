<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Guest\JawabanController;
use App\Http\Controllers\Guest\KuisionerController;
use App\Http\Controllers\Guest\Task2Controller;
use Illuminate\Support\Facades\Auth;
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

    //Route User
    Route::resource('kuis', KuisionerController::class);
    Route::get('index', [JawabanController::class, 'index'])->name('jawaban.index');
    Route::post('index', [JawabanController::class, 'jawaban2'])->name('jawaban2.store');
    Route::get('task2', [JawabanController::class, 'task2'])->name('task2');
    Route::post('task2', [JawabanController::class, 'jawaban3'])->name('jawaban3.store');
    Route::get('task3', [JawabanController::class, 'task3'])->name('task3');
    Route::post('task3', [JawabanController::class, 'jawaban4'])->name('jawaban4.store');
    Route::get('dah', [JawabanController::class, 'dah'])->name('dah');
    
    //Route Admin
    Route::resource('admin', AdminController::class);
    Route::resource('result', ResultController::class);
    
});

// Route::get('/dashboard', function () {
//     return view('layouts.mahasiswa.dashboard');

// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
