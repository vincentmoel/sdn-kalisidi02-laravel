<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\SiswaController;
use App\Http\Controllers\user\BeritaController;
use App\Http\Controllers\user\GaleriController;
use App\Http\Controllers\user\BerandaController;
use App\Http\Controllers\user\TentangController;
use App\Http\Controllers\user\GuruDanStaffController;

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



Route::get('/',[BerandaController::class,'index']);

Route::get('/tentang',[TentangController::class,'index']);


Route::get('/guru-staff',[GuruDanStaffController::class,'index']);


Route::get('/siswa',[SiswaController::class,'index']);


Route::get('/berita',[BeritaController::class,'index']);


Route::get('/galeri',[GaleriController::class,'index']);


