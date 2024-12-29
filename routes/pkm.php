<?php

use Illuminate\Support\Facades\Route;

Route::prefix('pkm-center')->namespace('PKM')->middleware(['auth', 'role:User', 'verified'])->group(function () {
    Route::get('/', 'BerandaController@index')->name('pkm-center');
    Route::get('detail program/{slug}', 'BerandaController@show_program')->name('beranda-detail');
    Route::get('detail pengumuman/{slug}', 'BerandaController@show_pengumuman')->name('pengumuman-detail');

    Route::resource('profil', 'ProfilController');
    Route::put('profil', 'ProfilController@change')->name('profil.change');

    Route::resource('pengajuan', 'PengajuanController');
    Route::post('pengajuan/{id}/upload', 'PengajuanController@uploadFile')->name('pengajuan.upload');
    Route::get('pengajuan/pdf/{id}', 'PengajuanController@show')->name('show');
    Route::get('pengajuan/{id}/registrasi', 'PengajuanController@create')->name('pengajuan.registrasi');
    Route::post('pengajuan/{id}/registrasi', 'PengajuanController@storeMember')->name('pengajuan.store-member');
    Route::get('anggota/{id}/edit', 'PengajuanController@editMember')->name('pengajuan.edit-member');
    Route::put('anggota/{id}', 'PengajuanController@updateMember')->name('pengajuan.update-member');
    Route::get('anggota/{id}/hapus', 'PengajuanController@removeMember')->name('pengajuan.delete-member');
});
