<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

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
    return view('template');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/tampildata', [MahasiswaController::class, 'readdata']);
Route::get('/tambahdata', [MahasiswaController::class, 'input']);
Route::get('/mahasiswa/store', [MahasiswaController::class, 'store']);

Route::get('/mahasiswa/edit/{nim}', [MahasiswaController::class, 'edit']);
Route::get('/mahasiswa/update', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/hapus/{nim}', [MahasiswaController::class, 'hapus']);