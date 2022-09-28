<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DesainController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\servisController;
use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\BarangkeluarController;

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
    return view('login');
})->middleware('auth');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth');

Route::get('tes', function () {
    return view('crypto');
});


Route::group(['middleware' => ['auth', 'hakakses:admin,servis,desain']], function () {

    //barang masuk
    Route::get('barangmasuk', [BarangmasukController::class, 'barangmasuk'])->name('barangmasuk')->middleware('auth');
    Route::get('tambahbarangmasuk', [BarangmasukController::class, 'tambahbarangmasuk'])->name('tambahbarangmasuk');
    Route::post('prosestambah', [BarangmasukController::class, 'prosestambah'])->name('prosestambah');
    Route::get('/editbrgmsk/{id}', [BarangmasukController::class, 'editbrgmsk'])->name('editbrgmsk');
    Route::post('/updatebrgmsk/{id}', [BarangmasukController::class, 'updatebrgmsk'])->name('updatebrgmsk');
    Route::get('/deletee/{id}', [BarangmasukController::class, 'deletee'])->name('deletee');

    //barang keluar
    Route::get('/barangkeluar', [BarangkeluarController::class, 'index'])->name('barangkeluar');
    Route::get('/tambahbarangkeluar', [BarangkeluarController::class, 'tambahbrgklr'])->name('tambahbarangkeluar');
    Route::post('/insertbarangkeluar', [BarangkeluarController::class, 'insertbrgklr'])->name('insertbarangkeluar');
    Route::get('/editbrgklr/{id}', [BarangkeluarController::class, 'editbrgklr'])->name('editbrgklr');
    Route::post('/updatebrgklr/{id}', [BarangkeluarController::class, 'updatebrgklr'])->name('updatebrgklr');
    Route::get('/delete/{id}', [BarangkeluarController::class, 'delete'])->name('delete');
});







Route::group(['middleware' => ['auth', 'hakakses:servis,admin']], function () {

    //servis
    Route::get('/dataservis', [servisController::class, 'dataservis'])->name('dataservis')->middleware('auth');
    Route::get('/tambahservis', [servisController::class, 'tambahservis'])->name('tambahservis');
    Route::post('/insertservis', [servisController::class, 'insertservis'])->name('insertservis');
    Route::get('/editservis/{id}', [servisController::class, 'editservis'])->name('editservis');
    Route::post('/updateservis/{id}', [servisController::class, 'updateservis'])->name('updateservis');
    Route::get('/deletet/{id}', [servisController::class, 'deletet'])->name('deletet');
});





Route::group(['middleware' => ['auth', 'hakakses:desain,admin']], function () {

    //desain
    Route::get('/datadesain', [DesainController::class, 'index'])->name('datadesain')->middleware('auth');
    Route::get('/tambahdesain', [DesainController::class, 'tambahdesain'])->name('tambahdesain');
    Route::post('/insertdesain', [DesainController::class, 'insertdesain'])->name('insertdesain');
    Route::get('/editdesain/{id}', [DesainController::class, 'editdesain'])->name('editdesain');
    Route::post('/updatedesain/{id}', [DesainController::class, 'updatedesain'])->name('updatedesain');
    Route::get('/deletes/{id}', [DesainController::class, 'deletes'])->name('deletes');
});






//login
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');




//pengeluaran
Route::get('/pengeluaran', [BarangmasukController::class, 'pengeluaran'])->name('pengeluaran')->middleware('auth');

//pemasukan
Route::get('/pemasukan', [BarangkeluarController::class, 'pemasukan'])->name('pemasukan')->middleware('auth');

//databarang

Route::get('/databarang', [BarangController::class, 'databarang'])->name('databarang')->middleware('auth');
Route::get('/tambahdatabarang', [BarangController::class, 'tambahdatabarang'])->name('tambahdatabarang')->middleware('auth');
Route::post('/insertdata', [BarangController::class, 'insertdata'])->name('insertdata');
Route::get('/editdatabarang/{id}', [BarangController::class, 'editdatabarang'])->name('editdatabarang')->middleware('auth');
Route::post('/updatedata/{id}', [BarangController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}', [BarangController::class, 'delete'])->name('delete');


 //profil
 Route::get('/profil',[LoginController::class, 'profil'])->name('profil');
 Route::get('/editprofil',[LoginController::class, 'editprofil'])->name('editprofil');
 Route::post('/updateprofil',[LoginController::class, 'updateprofil'])->name('updateprofil');


