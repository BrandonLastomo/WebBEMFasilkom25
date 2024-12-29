<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aplikasi\Pengaduan1Controller;

Route::get('aplikasi', 'AplikasiController@index')->name('aplikasi');

Route::prefix('aplikasi')->namespace('Aplikasi')->group(function () {
    // == APLIKASI PUBLIK
    // Route::get('elearning', 'ElearningController@index')->name('elearning');
    // Route::get('game', 'GameController@index')->name('game');
    // Route::get('mading', 'MadingController@index')->name('mading');
    Route::get('bemitory', 'BemitoryController@index')->name('bemitory');
    Route::get('foto-kegiatan', 'FotoKegiatanController@index')->name('foto-kegiatan');
    Route::get('karya-tulis', 'KaryaTulisController@index')->name('karya-tulis');
    Route::get('fasilkom-event', 'EventController@index')->name('event');
    Route::get('fasilkom-event/detail/{slug}', 'DetailEventController@index')->name('detail-event');

    Route::prefix('report')->group(function () {
        Route::get('/', 'AprController@index')->name('apr');
        Route::get('{detail}', 'AprController@show')->name('apr.detail');
    });
    
    Route::prefix('info-kajian')->group(function () {
        Route::get('/', 'InfoKajianController@index')->name('info-kajian');
        Route::get('{detail}', 'InfoKajianController@show')->name('info-kajian.detail');
    });
    
    Route::prefix('merchandise')->group(function () {
        Route::get('/', 'MerchandiseController@index')->name('merchandise');
        Route::get('{detail}', 'MerchandiseController@show')->name('merchandise.detail');
    });

    Route::prefix('lpj')->group(function () {
        Route::get('/', 'LpjController@index')->name('lpj');
        Route::get('bidang/{bidang}', 'LpjController@bidang')->name('lpj.bidang');
        Route::get('departemen/{departemen}', 'LpjController@departemen')->name('lpj.departemen');
        Route::get('{departemen}/{proker}', 'LpjController@proker')->name('lpj.proker');
    });

    Route::prefix('pengaduan')->group(function () {
        Route::get('/', 'PengaduanController@index')->name('pengaduan');
        Route::post('/kirimpengaduan', 'PengaduanController@store')->name('kirimpengaduan');
    });

    Route::prefix('pinjam-bem')->namespace('PINJAM')->middleware(['auth:peminjam'])->group(function () {
        Route::get('/', 'PinjamBemController@index')->name('pinjam');
    });

    
});



// Game
// Route::post('getuser', 'GetUserGameController@getUser')->name('get-user-game');
// Route::post('savescore', 'GetUserGameController@savescore')->name('save-score');

// Fasilkom Cup
// Route::prefix('fc')->namespace('Aplikasi')->group(function () {
//     Route::get('/', 'FasilkomCupController@index')->name('fasilkom-cup');
//     Route::get('{slug}', 'FasilkomCupController@detail')->name('fasilkom-cup.detail');
//     Route::get('{slug}/daftar', 'FasilkomCupController@register')->name('fasilkom-cup.register');
//     Route::post('{slug}/daftar', 'FasilkomCupController@store')->name('fasilkom-cup.store');
//     Route::get('{slug}/status', 'FasilkomCupController@status')->name('fasilkom-cup.status');
//     Route::get('{slug}/status', 'FasilkomCupController@status')->name('fasilkom-cup.status');
// });
