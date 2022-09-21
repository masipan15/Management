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
Route::get('barangmasuk',[BarangmasukController::class,'barangmasuk'])->name('barangmasuk');
Route::get('tambahbarangmasuk',[BarangmasukController::class,'tambahbarangmasuk']);
Route::post('prosestambah',[BarangmasukController::class,'prosestambah']);




//barang keluar
Route::get('/barangkeluar',[BarangkeluarController::class,'index'])->name('barangkeluar');
<<<<<<< HEAD
Route::get('/tambahbarangkeluar',[BarangkeluarController::class,'tambahbrgklr'])->name('tambahbarangkeluar');
Route::post('/insertbarangkeluar',[BarangkeluarController::class,'insertbrgklr'])->name('insertbarangkeluar');
=======
>>>>>>> 9d31ebcdbbf200a563b9286e8b7baa4690e2d163
