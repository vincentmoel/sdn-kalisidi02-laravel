<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\user\SiswaController;
use App\Http\Controllers\user\BeritaController;
use App\Http\Controllers\user\GaleriController;
use App\Http\Controllers\admin\GaleryController;
use App\Http\Controllers\user\BerandaController;
use App\Http\Controllers\user\TentangController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\TeacherController;
use App\Http\Controllers\admin\DashboardController;
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


// Authentication
Route::group(['middleware' => ['guest','revalidate']],function(){
    Route::get('/login',[AuthController::class,'index'])->name('login');
});

Route::post('/login',[AuthController::class,'authenticate']);

Route::post('/logout',[AuthController::class,'logout']);

Route::get('/logout',function(){
    return redirect('/');
}); 
// Authentication End




// User Routes
Route::get('/tentang',[TentangController::class,'index']);
Route::get('/guru-staff',[GuruDanStaffController::class,'index']);
Route::get('/siswa',[SiswaController::class,'index']);
Route::get('/berita',[BeritaController::class,'index']);
Route::get('/galeri',[GaleriController::class,'index']);
 // User Routes End





// For Admin
Route::group(['middleware' => ['auth','revalidate']],function(){

    Route::get('/admin',[DashboardController::class,'index']);

    Route::resource('/admin/teachers-staff', TeacherController::class);
    
    Route::resource('/admin/students', StudentController::class);
    
    Route::resource('/admin/news', NewsController::class);
    
    Route::resource('/admin/galeries', GaleryController::class);
    
    Route::resource('/admin/users', UserController::class)->middleware('is.superadmin');    
});
// For Admin End

