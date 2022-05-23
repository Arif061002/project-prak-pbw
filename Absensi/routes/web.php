<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\absensiController;

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
    return view('tampilan');
});


Route::get('/tampildata', [absensiController::class, 'readdata']);
Route::get('/tambahdata', [absensiController::class, 'input']);
Route::get('/absensi/store', [absensiController::class, 'store']);

Route::get('/absensi/edit/{nim}', [absensiController::class, 'edit']);
Route::get('/absensi/update', [absensiController::class, 'update']);
Route::get('/absensi/hapus/{nim}', [absensiController::class, 'hapus']);