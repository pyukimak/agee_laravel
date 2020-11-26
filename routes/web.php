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
    return view('index');
});
Route::get('/new', function () {
    return view('servis/master_servis');
});
Route::get('/pelanggan','CPelanggan@index');
Route::get('/pelanggan/kelompok','CPelanggan@kelompok');
Route::post('/pelanggan/cari','CPelanggan@cari');
Route::get('/pelanggan/carisemua','CPelanggan@carisemua');
Route::post('/pelanggan/detail/{id}','CPelanggan@detail');
Route::get('/pelanggan/hapus/{id}','CPelanggan@hapus');
Route::get('/pelanggan/tambah','CPelanggan@form');
Route::get('/pelanggan/edit/{id}','CPelanggan@form');
Route::post('/pelanggan/simpan','CPelanggan@simpan');
Route::post('/pelanggan/simpan/{id}','CPelanggan@simpan');
Route::post('/pelanggan/verify','CPelanggan@verif');

Route::get('/kontak','CKontak@index');
Route::post('/kontak/cari','CKontak@cari');
Route::post('/kontak/edit','CKontak@cari_data_ajax');
Route::get('/kontak/carisemua','CKontak@carisemua');
Route::post('/kontak/simpan','CKontak@simpan');
Route::post('/kontak/simpan/{id}','CKontak@simpan');
Route::get('/kontak/hapus/{id}','CKontak@hapus');

Route::get('/servis','CServis@index');
Route::get('/servis/master','CServis@master');
Route::get('/servis/master/agenda','CServis@masteragenda');
Route::post('/servis/cari','CServis@cari');
Route::post('/servis/masuk/{id}','CServis@masuk');
Route::post('/servis/kirim_rekanan/{id}','CServis@rekanan');

Route::get('/sdm','sdm@index');
Route::get('/sdm/master','sdm@master');
Route::post('/sdm/cari','sdm@cari');
Route::get('/sdm/tambah','sdm@form');
Route::get('/sdm/edit/{id}','sdm@form');
Route::post('/sdm/detail/{id}','sdm@detail');

Route::get('/rekanan','rekanan@index');
Route::get('/rekanan/kelompok','rekanan@kelompok');

Route::get('/barang','barang@index');
Route::get('/barang/grid','barang@indexgrid');
Route::post('/barang/detail/{id}','barang@detail');



Route::get('/surat/master','surat@master');

Route::get('/dokumen/master','dokumen@master');







