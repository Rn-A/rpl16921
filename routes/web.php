<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PembelajaranController;
use App\Http\Controllers\SiswaController;
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

Route::get('/index',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'home']);
Route::get('/home/tambah',[HomeController::class,'add']);
Route::get('/guru',[GuruController::class,'guruku']);
Route::get('/mapel',[MapelController::class,'mapelya']);
Route::get('/pembelajaran',[PembelajaranController::class,'sinau']);
Route::resource('siswa',SiswaController::class);

Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blog/about', [HomeController::class, 'blogabout']);
Route::get('/blog/contact', [HomeController::class, 'blogcontact']);