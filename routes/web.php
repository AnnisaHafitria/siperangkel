<?php

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
Config::set('debugbar.enabled', false);
Route::get('/', function () {
     return view('/layouts/frontend');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],
function (){

	//Anggota
	Route::resource('/anggota','AnggotaController');

	//Barang
	Route::resource('/barang','BarangController');

	//Peminjaman
	Route::resource('/peminjaman','PeminjamanController');

	//Pengembalian
	Route::resource('/pengembalian','PengembalianController');

	//Tentang Program
	Route::resource('pengunjung/tentang_program','TentangProgramController');

	//Testimoni
	Route::resource('pengunjung/testimoni','TestimoniController');

	//Kontak
	Route::resource('pengunjung/kontak','KontakController');

	//Aturan
	Route::resource('pengunjung/aturan','AturanController');

	//Industri
	Route::resource('pengunjung/industri','IndustriController');

//Laporan PDF
	//Anggota
	Route::get('eksportpdf','AnggotaController@eksportPDF')->name('anggota.eksport');
	Route::get('/laporan/anggota', 'AnggotaController@index1');
	Route::post('/laporan/anggota/detail', 'AnggotaController@index2');
	Route::post('/laporan/anggota/detail1', 'AnggotaController@index3');

	//Barang
	Route::get('eksporpdf','BarangController@eksporPDF')->name('barang.ekspor');
	Route::get('/laporan/barang', 'BarangController@index1');
	Route::post('/laporan/barang/detail', 'BarangController@index2');
	Route::post('/laporan/barang/detail1', 'BarangController@index3');

	//Peminjaman
	Route::get('exporpdf','PeminjamanController@exporPDF')->name('peminjaman.expor');
	Route::get('/laporan/peminjaman', 'PeminjamanController@index1');
	Route::post('/laporan/peminjaman/detail', 'PeminjamanController@index2');
	Route::post('/laporan/peminjaman/detail1', 'PeminjamanController@index3');

	//Pengembalian
	Route::get('exportpdf','PengembalianController@exportPDF')->name('pengembalian.export');
	Route::get('/laporan/pengembalian', 'PengembalianController@index1');
	Route::post('/laporan/pengembalian/detail', 'PengembalianController@index2');
	Route::post('/laporan/pengembalian/detail1', 'PengembalianController@index3');

// Dokumentasi Excel
	//Export Excel Anggota dengan {{url('anggota.export')}}
	Route::get('/exportexcel','AnggotaController@exportExcel')->name('anggota.export');

	//Export Excel Barang dengan {{url('barang.expor')}}
	Route::get('/exporexcel','BarangController@exporExcel')->name('barang.expor');

	//Export Excel Peminjaman dengan {{url('peminjaman.ekspor')}}
	Route::get('/eksporexcel','PeminjamanController@eksporExcel')->name('peminjaman.ekspor');

	//Export Excel Anggota dengan {{url('anggota.export')}}
	Route::get('/eksportexcel','PengembalianController@eksportExcel')->name('pengembalian.eksport');
});

Route::group(['middleware' => 'cors'],function(){
	Route::get('list_barang','ApiController@list_barang');
});
