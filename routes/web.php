<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AllDosenController;
use App\Http\Controllers\Admin\MhsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Guest\MahasiswaController;
use App\Http\Controllers\UserController;
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
    Route::get('user', [UserController::class, 'index'])->name('user');
    
    //Route Admin
    Route::resource('admin', AdminController::class);
    Route::resource('alldosen', AllDosenController::class);
    Route::resource('mhs', MhsController::class);


    //Route Dosen
    Route::resource('dosen', DosenController::class);

    //Route Mahasiswa
    
    Route::resource('mahasiswa', MahasiswaController::class);
    

    
});

// Route::get('/dashboard', function () {
//     return view('layouts.mahasiswa.dashboard');

// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
