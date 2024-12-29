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

Route::fallback(function () {
    return redirect()->back();
});

// NAVBAR
Route::get('/', 'HomeController@index')->name('home');
Route::get('kontak', 'KontakController@index')->name('kontak');
Route::get('fasilkom-news', 'NewsController@index')->name('news');
Route::get('fasilkom-news/detail/{slug}', 'DetailNewsController@index')->name('detail-news');

// == TENTANG KAMI
Route::get('tentang/visi-misi', 'VisimisiController@index')->name('visimisi');
Route::get('tentang/struktur', 'StrukturController@index')->name('struktur');
Route::get('tentang/filosofi-logo', 'FilosofiController@index')->name('filosofi');

// == PROFIL
Route::get('bph', 'BphController@index')->name('bph');

// PSDM
Route::get('bidang/psdm', 'PsdmController@index')->name('psdm');
Route::get('bidang/psdm/kaderisasi', 'PsdmController@kaderisasi')->name('kaderisasi');
Route::get('bidang/psdm/pp', 'PsdmController@pp')->name('pp');

// MINAT BAKAT
Route::get('bidang/minat-bakat', 'MinatBakatController@index')->name('minat-bakat');
Route::get('bidang/minatbakat/keilmuan', 'MinatBakatController@keilmuan')->name('keilmuan');
Route::get('bidang/minatbakat/olahraga', 'MinatBakatController@olahraga')->name('olahraga');
Route::get('bidang/minatbakat/senbud', 'MinatBakatController@senbud')->name('senbud');

// SOSPOL
Route::get('bidang/sospol', 'SospolController@index')->name('sospol');
Route::get('bidang/sospol/adkesma', 'SospolController@adkesma')->name('adkesma');
Route::get('bidang/sospol/kastrat', 'SospolController@kastrat')->name('kastrat');
Route::get('bidang/sospol/pengmas', 'SospolController@pengmas')->name('pengmas');

// KOMINFO
Route::get('bidang/kominfo', 'KominfoController@index')->name('kominfo');
Route::get('bidang/kominfo/bismit', 'KominfoController@bismit')->name('bismit');
Route::get('bidang/kominfo/media', 'KominfoController@media')->name('media');
Route::get('bidang/kominfo/pti', 'KominfoController@pti')->name('pti');
Route::get('bidang/kominfo/humas', 'KominfoController@humas')->name('humas');

Route::get('/clear-cache', function () { 
    Artisan::call('cache:clear'); 
    return "Cache dibersihkan"; 
});

require __DIR__ . '/aplikasi.php';

require __DIR__ . '/pkm.php';

require __DIR__ . '/prepkm.php';

require __DIR__ . '/admin.php';

require __DIR__ . '/pinjam.php';

// require __DIR__ . '/pkkmb.php';

require __DIR__ . '/auth.php';
