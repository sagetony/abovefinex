<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\depositController;
use App\Http\Controllers\depositHisController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\proUpdateController;
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

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

Route::get('/register/{$ref}', [RegController::class, 'index'])->name('register');
Route::get('/register', [RegController::class, 'index'])->name('register');
Route::post('/register', [RegController::class, 'store'])->name('register');

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store'])->name('login');

Route::get('/profile', [proUpdateController::class, 'index'])->name('profile');
Route::post('/profile', [proUpdateController::class, 'updateprofile'])->name('profile');
Route::post('/profileimage', [proUpdateController::class, 'photoupdate'])->name('profileimage');
Route::post('/profilepass', [proUpdateController::class, 'updatepassword'])->name('profilepass');

Route::get('/deposit', [depositController::class, 'index'])->name('deposit');
Route::post('/deposit', [depositController::class, 'store'])->name('deposit');

Route::get('/deposithistory', [depositHisController::class, 'index'])->name('deposithistory');
