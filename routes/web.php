<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SupplierController;

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

Route::get('/', [PageController::class, 'home']);
Route::get('/home', [PageController::class, 'main']);
Route::get('/about-us', [PageController::class, 'about']);
Route::get('/contact-us', [PageController::class, 'contact']);
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/supplier', [SupplierController::class, 'index']);