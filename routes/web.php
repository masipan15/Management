<?php

use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\BarangkeluarController;
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

//barang masuk
Route::get('barangmasuk',[BarangmasukController::class,'barangmasuk']);



//barang keluar
Route::get('/barangkeluar',[BarangkeluarController::class,'index'])->name('barangkeluar');