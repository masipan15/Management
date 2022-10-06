<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DesainController;
use App\Http\Controllers\servisController;
use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\BarangkeluarController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\UserdesainController;
use App\Http\Controllers\UserservisController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\PelangganController;
use App\Models\Barang;
use App\Models\desain;
use App\Models\servis;
use App\Models\Supplier;

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
    return view('/login');
})->middleware('auth');

Route::get('/welcome', function () {

    $jumlahbarang = Barang::count();
    $jumlahsupplier = Supplier::count();
    $jumlahpermintaandesain = desain::count();
    $jumlahservis = servis::count();

    return view('welcome', compact('jumlahbarang', 'jumlahsupplier', 'jumlahpermintaandesain', 'jumlahservis'));
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


    //Kategori
    Route::get('/datakategori', [kategoriController::class, 'index'])->name('datakategori');
    Route::get('/tambahkategori', [kategoriController::class, 'tambahkategori'])->name('tambahkategori');
    Route::post('/insertkategori', [kategoriController::class, 'insertkategori'])->name('insertkategori');
    Route::get('/editkategori/{id}', [kategoriController::class, 'editkategori'])->name('editkategori');
    Route::post('/updatekategori/{id}', [kategoriController::class, 'updatekategori'])->name('updatekategori');
    Route::get('/hapusktgr/{id}', [kategoriController::class, 'hapusktgr'])->name('hapusktgr');

    //pengeluaran
    Route::get('/pengeluaran', [PengeluaranController::class, 'pengeluaran'])->name('pengeluaran')->middleware('auth');
    Route::post('pengeluaran', [PengeluaranController::class, 'create']);
    //pemasukan
    Route::get('/pemasukan', [PemasukanController::class, 'pemasukan'])->name('pemasukan')->middleware('auth');
    Route::post('pemasukan', [PemasukanController::class, 'create']);
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


    //servis
    Route::get('/dataservis', [servisController::class, 'dataservis'])->name('dataservis')->middleware('auth');
    Route::get('/tambahservis', [servisController::class, 'tambahservis'])->name('tambahservis');
    Route::post('/insertservis', [servisController::class, 'insertservis'])->name('insertservis');
    Route::get('/editservis/{id}', [servisController::class, 'editservis'])->name('editservis');
    Route::post('/updateservis/{id}', [servisController::class, 'updateservis'])->name('updateservis');
    Route::get('/deletet/{id}', [servisController::class, 'deletet'])->name('deletet');



    //desain
    Route::get('/datadesain', [DesainController::class, 'index'])->name('datadesain')->middleware('auth');
    Route::get('/tambahdesain', [DesainController::class, 'tambahdesain'])->name('tambahdesain');
    Route::post('/insertdesain', [DesainController::class, 'insertdesain'])->name('insertdesain');
    Route::get('/editdesain/{id}', [DesainController::class, 'editdesain'])->name('editdesain');
    Route::post('/updatedesain/{id}', [DesainController::class, 'updatedesain'])->name('updatedesain');
    Route::get('/deletes/{id}', [DesainController::class, 'deletes'])->name('deletes');


    //pelanggan
    Route::get('/datapelanggan', [PelangganController::class, 'datapelanggan'])->name('datapelanggan');
    Route::get('/editpelanggan/{id}', [PelangganController::class, 'editpelanggan'])->name('editpelanggan');
    Route::post('/updatepelanggan/{id}', [PelangganController::class, 'updatepelanggan'])->name('updatepelanggan');
    Route::get('/hapuspelanggan/{id}', [PelangganController::class, 'hapuspelanggan'])->name('hapuspelanggan');
});

Route::group(['middleware' => ['auth', 'hakakses:servis']], function () {
    //userservis
    Route::get('/datauserservis', [UserservisController::class, 'datauserservis'])->name('datauserservis')->middleware('auth');
    Route::get('/edituserservis/{id}', [UserservisController::class, 'edituserservis'])->name('edituserservis');
    Route::post('/updateuserservis/{id}', [UserservisController::class, 'updateuserservis'])->name('updateuserservis');
});

Route::group(['middleware' => ['auth', 'hakakses:desain']], function () {
    Route::get('/datauserdesain', [UserdesainController::class, 'datauserdesain'])->name('datauserdesain')->middleware('auth');
    Route::get('/edituserdesain/{id}', [UserdesainController::class, 'edituserdesain'])->name('edituserdesain');
    Route::post('/updateuserdesain/{id}', [UserdesainController::class, 'updateuserdesain'])->name('updateuserdesain');
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



//exportpdf
Route::get('/exportpdf', [PengeluaranController::class, 'exportpdf'])->name('exportpdf');




