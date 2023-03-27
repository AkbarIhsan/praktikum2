<?php

use App\Http\Controllers\HomeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/', [HomeeController::class, 'homee'])->name('homee');

Route::get('/pengalaman', [PengalamanController::class, 'pengalaman'])->name('pengalaman');

Route::get('/users', [UserController::class, 'user']);

Route::get('/content', [ContentController::class, 'content'])->name('content');


