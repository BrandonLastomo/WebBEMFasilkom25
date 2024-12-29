// <?php

// use Illuminate\Support\Facades\Route;

// Route::prefix('pkkmb2021')->namespace('PKKMB')->middleware(['auth:maba'])->group(function () {
//     Route::get('/', 'PkkmbController@index')->name('pkkmb');
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
