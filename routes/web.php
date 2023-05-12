<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PesanController;
=======
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoryController;
>>>>>>> 4ce0b05afcf35b8e19b2398bcda9d6ba15252bc2

/*
|--------------------------------------------------------------------------
| Web Routes
|-ravi-edo-----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('pesan/{id}', [PesanController::class, 'index']);
Route::post('pesan/{id}', [PesanController::class, 'pesan']);
Route::get('check-out', [PesanController::class, 'check_out']);
<<<<<<< HEAD
=======
Route::delete('check-out/{id}', [PesanController::class, 'delete']);

Route::get('konfirmasi-check-out', [PesanController::class, 'konfirmasi']);

Route::get('profile', [ProfileController::class, 'index']);
Route::post('profile', [ProfileController::class, 'update']);

Route::get('history', [HistoryController::class, 'index']);
Route::get('history/{id}', [HistoryController::class, 'detail']);
>>>>>>> 4ce0b05afcf35b8e19b2398bcda9d6ba15252bc2
