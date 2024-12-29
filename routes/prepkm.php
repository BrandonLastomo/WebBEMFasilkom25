<?php

use Illuminate\Support\Facades\Route;

Route::prefix('prepkm-center')->namespace('PREPKM')->group(function () {
    Route::get('/', 'BerandaController@index')->name('prepkm-center');
    Route::get('detail program/{slug}', 'BerandaController@show_program')->name('beranda-detail');
    Route::get('detail pengumuman/{slug}', 'BerandaController@show_pengumuman')->name('pengumuman-detail');
});
