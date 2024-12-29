<?php

use Illuminate\Support\Facades\Route;

Route::prefix('pinjam-bem')->namespace('PINJAM')->middleware('auth')->middleware(['auth:peminjam'])->group(function () {
       Route::get('/', 'PinjamBemController@index')->name('pinjam');
       Route::get('/login', 'PinjamBemController@index')->name('pinjam.login');
       Route::get('/profil', 'ProfilController@index')->name('pinjam.profil');
       Route::get('/lihatbarang', 'LihatBarangController@index')->name('pinjam.lihatbarang');
       Route::get('/peminjaman', 'PeminjamanController@index')->name('pinjam.peminjaman');
       Route::post('/peminjaman/ajukanpeminjaman', 'PeminjamanController@store')->name('pinjam.ajukanpeminjaman');
       Route::get('/riwayat', 'RiwayatController@index')->name('pinjam.riwayat');
       Route::get('/riwayat/downloadpdf/{id}','RiwayatController@exportpdf')->name('pinjam.exportpdf');
       Route::post('/riwayat/dibatalkan/{id}','RiwayatController@dibatalkan')->name('pinjam.dibatalkan');
//     Route::get('informasi/{slug}', 'PkkmbController@detailInformation')->name('pkkmb.informasi');

//     Route::get('absen', 'PkkmbController@absen')->name('pkkmb.absen');
//     Route::put('absen', 'PkkmbController@saveAbsen')->name('pkkmb.save');
//     Route::get('peraturan', 'PkkmbController@peraturan')->name('pkkmb.peraturan');
//     Route::get('tata-tertib', 'PkkmbController@tata_tertib')->name('pkkmb.tata-tertib');
//     Route::get('kelompok', 'PkkmbController@kelompok')->name('pkkmb.kelompok');
//     Route::get('rundown', 'PkkmbController@rundown')->name('pkkmb.rundown');
//     Route::get('mars', 'PkkmbController@mars')->name('pkkmb.mars');
//     Route::get('tugas', 'PkkmbController@tugas')->name('pkkmb.tugas');
//     // Route::post('tugas-individu', 'PkkmbController@saveTugasIndividu')->name('pkkmb.tugas-individu');
//     Route::post('tugas-kelompok', 'PkkmbController@saveTugasKelompok')->name('pkkmb.tugas-kelompok');
// });
});

    





