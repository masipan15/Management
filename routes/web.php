<?php

use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\BarangkeluarController;
use App\Http\Controllers\DesainController;
use App\Http\Controllers\servisController;
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
Route::get('barangmasuk', [BarangmasukController::class, 'barangmasuk'])->name('barangmasuk');
Route::get('tambahbarangmasuk', [BarangmasukController::class, 'tambahbarangmasuk'])->name('tambahbarangmasuk');
Route::post('prosestambah', [BarangmasukController::class, 'prosestambah'])->name('prosestambah');
Route::get('/editbrgmsk/{id}',[BarangmasukController::class, 'editbrgmsk'])->name('editbrgmsk');
Route::post('/updatebrgmsk/{id}',[BarangmasukController::class, 'updatebrgmsk'])->name('updatebrgmsk');
Route::get('/deletee/{id}',[BarangmasukController::class, 'deletee'])->name('deletee');




//barang keluar
Route::get('/barangkeluar',[BarangkeluarController::class,'index'])->name('barangkeluar');
Route::get('/tambahbarangkeluar',[BarangkeluarController::class,'tambahbrgklr'])->name('tambahbarangkeluar');
Route::post('/insertbarangkeluar',[BarangkeluarController::class,'insertbrgklr'])->name('insertbarangkeluar');
Route::get('/editbrgklr/{id}',[BarangkeluarController::class, 'editbrgklr'])->name('editbrgklr');
Route::post('/updatebrgklr/{id}',[BarangkeluarController::class, 'updatebrgklr'])->name('updatebrgklr');
Route::get('/delete/{id}',[BarangkeluarController::class, 'delete'])->name('delete');



//desain
Route::get('/datadesain',[DesainController::class,'index'])->name('datadesain');
Route::get('/tambahdesain',[DesainController::class,'tambahdesain'])->name('tambahdesain');
Route::post('/insertdesain',[DesainController::class,'insertdesain'])->name('insertdesain');
Route::get('/editdesain/{id}',[DesainController::class, 'editdesain'])->name('editdesain');
Route::post('/updatedesain/{id}',[DesainController::class, 'updatedesain'])->name('updatedesain');
Route::get('/deletes/{id}',[DesainController::class, 'deletes'])->name('deletes');



//servis
Route::get('/dataservis',[servisController::class,'dataservis'])->name('dataservis');
Route::get('/tambahservis',[servisController::class,'tambahservis'])->name('tambahservis');
Route::post('/insertservis',[servisController::class,'insertservis'])->name('insertservis');
Route::get('/editservis/{id}',[servisController::class, 'editservis'])->name('editservis');
Route::post('/updateservis/{id}',[servisController::class, 'updateservis'])->name('updateservis');
Route::get('/deletet/{id}',[servisController::class, 'deletet'])->name('deletet');
