<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DesainController;
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


Route::group(['middleware' => ['auth', 'hakakses:admin']], function () {

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


    
    //pengeluaran
    Route::get('/pengeluaran', [BarangmasukController::class, 'pengeluaran'])->name('pengeluaran')->middleware('auth');

    //pemasukan
    Route::get('/pemasukan', [BarangkeluarController::class, 'pemasukan'])->name('pemasukan')->middleware('auth');

    //databarang

    Route::get('/databarang', [BarangController::class, 'databarang'])->name('databarang')->middleware('auth');
    Route::get('/tambahbarang', [BarangController::class, 'tambahbarang'])->name('tambahbarang')->middleware('auth');
    Route::post('/insertbarang', [BarangController::class, 'insertbarang'])->name('insertbarang');
    Route::get('/editbarang/{id}', [BarangController::class, 'editbarang'])->name('editbarang')->middleware('auth');
    Route::post('/updatebarang/{id}', [BarangController::class, 'updatebarang'])->name('updatebarang');
    Route::get('/deletese/{id}', [BarangController::class, 'deletese'])->name('deletese');


    //supplier
    Route::get('/datasupplier', [SupplierController::class, 'datasupplier'])->name('datasupplier')->middleware('auth');
    Route::get('/tambahsupplier', [SupplierController::class, 'tambahsupplier'])->name('tambahsupplier')->middleware('auth');
    Route::post('/insertsupplier', [SupplierController::class, 'insertsupplier'])->name('insertsupplier');
    Route::get('/editsupplier/{id}', [SupplierController::class, 'editsupplier'])->name('editsupplier')->middleware('auth');
    Route::post('/updatesupplier/{id}', [SupplierController::class, 'updatesupplier'])->name('updatesupplier');
    Route::get('/deletetet/{id}', [SupplierController::class, 'deletetet'])->name('deletetet');
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
Route::get('/registerservis', [LoginController::class, 'registerservis'])->name('registerservis');
Route::post('/createservis', [LoginController::class, 'createservis'])->name('createservis');
Route::get('/registerdesain', [LoginController::class, 'registerdesain'])->name('registerdesain');
Route::post('/createdesain', [LoginController::class, 'createdesain'])->name('createdesain');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//profil
Route::get('/profil', [LoginController::class, 'profil'])->name('profil');
Route::get('/editprofil', [LoginController::class, 'editprofil'])->name('editprofil');
Route::post('/updateprofil', [LoginController::class, 'updateprofil'])->name('updateprofil');


//shift data
Route::get('/shiftdata', [BarangmasukController::class, 'shiftdata'])->name('shiftdata');
