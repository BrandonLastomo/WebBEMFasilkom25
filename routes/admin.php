<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->namespace('Admin')->middleware(['auth', 'role:Admin|Humas|Operator'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    // Struktur
    Route::prefix('data')->group(function () {
        Route::get('struktur', 'StrukturController@index')->name('admin.struktur');
        // Bidang
        Route::resource('bidang', 'BidangController');
        Route::get('bidang/{id}/delete', 'BidangController@destroy')->name('bidang.delete');

        // Departemen
        Route::resource('departemen', 'DepartemenController');
        Route::get('departemen/{id}/delete', 'DepartemenController@destroy')->name('departemen.delete');

        // Pengurus
        Route::resource('pengurus', 'PengurusController');
        Route::get('pengurus/{id}/delete', 'PengurusController@destroy')->name('pengurus.delete');
        Route::get('fetch', 'PengurusController@fetch');

        // Proker
        Route::resource('proker', 'ProkerController');
        Route::get('proker/{id}/delete', 'ProkerController@destroy')->name('proker.delete');

        // Akun
        Route::resource('peminjam', 'PeminjamController');
        Route::get('peminjam/{id}/delete', 'PeminjamController@destroy')->name('peminjam.delete');

        Route::resource('user', 'UserController');
        Route::get('user/{id}/delete', 'UserController@destroy')->name('user.delete');

        Route::resource('role', 'RoleController');
        Route::get('role/{id}/delete', 'RoleController@destroy')->name('role.delete');
    });

    // Konten
    Route::prefix('konten')->group(function () {
        // Berita
        Route::resource('berita', 'BeritaController');
        Route::get('berita/{id}/delete', 'BeritaController@destroy')->name('berita.delete');

        // Acara
        Route::resource('acara', 'AcaraController');
        Route::get('acara/{id}/delete', 'AcaraController@destroy')->name('acara.delete');

        // Karya
        Route::resource('karya', 'KaryaController');
        Route::get('karya/{id}/delete', 'KaryaController@destroy')->name('karya.delete');
    });

    Route::prefix('aplikasi')->group(function () {
        Route::resource('apr', 'AprController');
        Route::get('apr/{id}/delete', 'AprController@destroy')->name('apr.delete');
        Route::post('apr/dikaji/{id}', 'AprController@dikaji')->name('apr.dikaji');
        Route::get('apr/downloadpf/{id}','AprController@exportpdf')->name('exportpdf');
        Route::get('apr/buatapr/{id}','AprController@buatapr')->name('apr.buatapr');
        Route::get('apr/detail/{id}','AprController@show')->name('apr.show');


        Route::resource('info-kajian', 'KajianController');
        Route::get('kajian/detail/{id}','KajianController@show')->name('kajian.show');
        Route::get('kajian/{id}/delete', 'KajianController@destroy')->name('kajian.delete');
        
        
        
        Route::resource('merchandise', 'MerchandiseController');
        Route::get('merchandise/detail/{id}','MerchandiseController@show')->name('merchandise.show');
        Route::get('merchandise/{id}/delete', 'MerchandiseController@destroy')->name('merchandise.delete');



        Route::resource('bemitory', 'BemitoryController');
        Route::get('bemitory/{id}/delete', 'BemitoryController@destroy')->name('bemitory.delete');
        Route::get('bemitory/{id}/edit', 'BemitoryController@edit')->name('bemitory.edit');
        Route::post('bemitory/disetujui/{id}', 'BemitoryController@disetujui')->name('bemitory.disetujui');
        Route::post('bemitory/ditolak/{id}', 'BemitoryController@ditolak')->name('bemitory.ditolak');
        Route::post('bemitory/dibatalkan/{id}', 'BemitoryController@dibatalkan')->name('bemitory.ditolak');
        


        // Event
        Route::resource('event', 'EventController');
        Route::get('event/{id}/delete', 'EventController@destroy')->name('event.delete');

        Route::resource('fcup', 'FasilkomCupController');
        Route::get('fcup/{id}/delete', 'FasilkomCupController@destroy')->name('fcup.delete');
        Route::get('fcup/{slug}/peserta/{id}', 'FasilkomCupController@pesertaIndividu')->name('fcup.individu');
        Route::get('fcup/{slug}/{id}/peserta', 'FasilkomCupController@pesertaTim')->name('fcup.tim');
    });

    Route::prefix('pkkmb')->group(function () {
        Route::get('maba', 'MabaController@index')->name('maba.index');
        Route::get('maba/{id}', 'MabaController@show')->name('maba.detail');

        Route::resource('informasi', 'InformasiController');
        Route::get('informasi/{id}/delete', 'InformasiController@destroy')->name('informasi.delete');

        Route::resource('rundown', 'RundownController');
        Route::get('rundown/{id}/delete', 'RundownController@destroy')->name('rundown.delete');

        Route::resource('tugas-individu', 'TugasIndividuController');
        Route::get('tugas-individu/{id}/delete', 'TugasIndividuController@destroy')->name('tugas-individu.delete');

        Route::resource('tugas-kelompok', 'TugasKelompokController');
        Route::get('tugas-kelompok/{id}', 'TugasKelompokController@show')->name('tugas-kelompok.detail');
        Route::get('tugas-kelompok/{id}/delete', 'TugasKelompokController@destroy')->name('tugas-kelompok.delete');
    });

    Route::prefix('pkm-center')->group(function () {
        // Program
        Route::resource('program', 'ProgramController');
        Route::get('program/{id}/delete', 'ProgramController@destroy')->name('program.delete');

        // Pengumuman
        Route::resource('pengumuman', 'PengumumanController');
        Route::get('pengumuman/{id}/delete', 'PengumumanController@destroy')->name('pengumuman.delete');
        
        // Preview
        Route::resource('preview', 'PreviewController');
        Route::get('preview/{id}/delete', 'PreviewController@destroy')->name('preview.delete');

        // User PKM
        Route::resource('pengusul', 'PengusulController');
        Route::get('pengusul/{id}/delete', 'PengusulController@destroy')->name('pengusul.delete');
        Route::get('pengusul/pdf/{id}', 'PengusulController@showPdf')->name('pengusul.show-pdf');
        Route::get('proposal/{id}/detail', 'PengusulController@detail')->name('pengusul.detail');
    });
});
