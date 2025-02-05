<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DesaaController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\DisabilitasController;
use App\Http\Controllers\GoldarahController;
use App\Http\Controllers\PemilikankkController;
use App\Http\Controllers\KkController;
use App\Http\Controllers\StatuskawinController;
use App\Http\Controllers\UmurController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::resource('kecamatan', KecamatanController::class);
Route::get('/kecamatan', [KecamatanController::class, 'index'])->name('kecamatan');
Route::post('/kecamatan/import', [KecamatanController::class, 'import'])->name('kecamatan.import');
Route::delete('/kecamatan/{id}', [KecamatanController::class, 'destroy'])->name('kecamatan.destroy');

Route::resource('desaa', DesaaController::class);
Route::get('/desaa', [DesaaController::class, 'index'])->name('desaa');
Route::post('/desaa/import', [DesaaController::class, 'import'])->name('desaa.import');
Route::delete('/desaa/{id}', [DesaaController::class, 'destroy'])->name('desa.destroy');

Route::resource('penduduk', PendudukController::class);
Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk');
Route::post('/penduduk/import', [PendudukController::class, 'import'])->name('penduduk.import');
Route::delete('/penduduk/{id}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');

Route::resource('keluarga', KeluargaController::class);
Route::get('/keluarga', [KeluargaController::class, 'index'])->name('keluarga');
Route::post('/keluarga/import', [KeluargaController::class, 'import'])->name('keluarga.import');
Route::delete('/keluarga/{id}', [KeluargaController::class, 'destroy'])->name('keluarga.destroy');

Route::resource('kk', KkController::class);
Route::get('/kk', [KkController::class, 'index'])->name('kk');
Route::post('/kk/import', [KkController::class, 'import'])->name('kk.import');
Route::delete('/kk/{id}', [KkController::class, 'destroy'])->name('kk.destroy');

Route::resource('agama', AgamaController::class);
Route::get('/agama', [AgamaController::class, 'index'])->name('agama');
Route::post('/agama/import', [AgamaController::class, 'import'])->name('agama.import');
Route::delete('/agama/{id}', [AgamaController::class, 'destroy'])->name('agama.destroy');

Route::resource('umur', UmurController::class);
Route::get('/umur', [UmurController::class, 'index'])->name('umur');
Route::post('/umur/import', [UmurController::class, 'import'])->name('umur.import');
Route::delete('/umur/{id}', [UmurController::class, 'destroy'])->name('umur.destroy');

Route::resource('pendidikan', PendidikanController::class);
Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan');
Route::post('/pendidikan/import', [PendidikanController::class, 'import'])->name('pendidikan.import');
Route::delete('/pendidikan/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');

Route::resource('pekerjaan', PekerjaanController::class);
Route::get('/pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan');
Route::post('/pekerjaan/import', [PekerjaanController::class, 'import'])->name('pekerjaan.import');
Route::delete('/pekerjaan/{id}', [PekerjaanController::class, 'destroy'])->name('pekerjaan.destroy');

Route::resource('statuskawin', StatusKawinController::class);
Route::get('/statuskawin', [StatusKawinController::class, 'index'])->name('statuskawin');
Route::post('/statuskawin/import', [StatusKawinController::class, 'import'])->name('statuskawin.import');
Route::delete('/statuskawin/{id}', [StatusKawinController::class, 'destroy'])->name('statuskawin.destroy');

Route::resource('goldarah', GoldarahController::class);
Route::get('/goldarah', [GoldarahController::class, 'index'])->name('goldarah');
Route::post('/goldarah/import', [GoldarahController::class, 'import'])->name('goldarah.import');
Route::delete('/goldarah/{id}', [GoldarahController::class, 'destroy'])->name('goldarah.destroy');

Route::resource('disabilitas', DisabilitasController::class);
Route::get('/disabilitas', [DisabilitasController::class, 'index'])->name('disabilitas');
Route::post('/disabilitas/import', [DisabilitasController::class, 'import'])->name('disabilitas.import');
Route::delete('/disabilitas/{id}', [DisabilitasController::class, 'destroy'])->name('disabilitas.destroy');





