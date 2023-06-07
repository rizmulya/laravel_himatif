<?php

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
    return view('himatif');
});

Route::get('/admin', function () {
    return view('login');
});
Route::view('/user', 'users');

//login
Route::get('/login', [App\Http\Controllers\UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/logins', [App\Http\Controllers\UserController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout']);

Route::resource('aspirasi', \App\Http\Controllers\AspirasiController::class);

//Router Berita
Route::resource('berita', \App\Http\Controllers\BeritaController::class);
//hapus file berita
Route::get('/hapus/berita/{id}', [App\Http\Controllers\BeritaController::class,'destroy']);
//update file berita
Route::get('/ubah/berita/{id}', [App\Http\Controllers\BeritaController::class,'update']);


Route::resource('pengurus', \App\Http\Controllers\PengurusController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);
Route::resource('frontpengumuman', \App\Http\Controllers\FrontpengumumanController::class);
Route::resource('frontberita', \App\Http\Controllers\FrontberitaController::class);
Route::resource('frontkegiatan', \App\Http\Controllers\FrontkegiatanController::class);
Route::resource('himatif', \App\Http\Controllers\HimatifController::class);
