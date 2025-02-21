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


// routes/web.php
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
    // Other admin routes
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/user/home', [UserController::class, 'index'])->name('user.home');
    // Other user routes
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::resource('kecamatan', KecamatanController::class);
Route::post('/kecamatan/import', [KecamatanController::class, 'import'])->name('kecamatan.import');
Route::delete('/kecamatan/{id}', [KecamatanController::class, 'destroy'])->name('kecamatan.destroy');
Route::get('/export-kecamatan', [KecamatanController::class, 'export'])->name('export.kecamatan');


Route::resource('desaa', DesaaController::class);
Route::post('/desaa/import', [DesaaController::class, 'import'])->name('desaa.import');
Route::delete('/desaa/{id}', [DesaaController::class, 'destroy'])->name('desa.destroy');
Route::get('/export-desaa', [DesaaController::class, 'export'])->name('export.desaa');


Route::resource('kk', KkController::class);
Route::get('/kk/{id}/detail', [KKController::class, 'detail'])->name('kk.detail');
Route::post('/kk/import', [KkController::class, 'import'])->name('kk.import');
Route::delete('/kk/{id}', [KkController::class, 'destroy'])->name('kk.destroy');
Route::get('/export-kk', [KkController::class, 'export'])->name('export.kk');


Route::resource('agama', AgamaController::class);
Route::get('/agama/{id}/detail', [AgamaController::class, 'detail'])->name('agama.detail');
Route::post('/agama/import', [AgamaController::class, 'import'])->name('agama.import');
Route::delete('/agama/{id}', [AgamaController::class, 'destroy'])->name('agama.destroy');
Route::get('/export-agama', [AgamaController::class, 'export'])->name('export.agama');

Route::resource('umur', UmurController::class);
Route::get('/umur/{id}/detail', [UmurController::class, 'detail'])->name('umur.detail');
Route::get('/umur/{id}/edit', [UmurController::class, 'edit'])->name('umur.edit')->middleware('auth');
Route::get('/umur/{id}/show', [UmurController::class, 'show'])->name('umur.show')->middleware('auth');
Route::post('/umur/import', [UmurController::class, 'import'])->name('umur.import');
Route::delete('/umur/{id}', [UmurController::class, 'destroy'])->name('umur.destroy');
Route::get('/export-umur', [UmurController::class, 'export'])->name('export.umur');


Route::resource('pendidikan', PendidikanController::class);
Route::get('/pendidikan/{id}/detail', [PendidikanController::class, 'detail'])->name('pendidikan.detail');
Route::post('/pendidikan/import', [PendidikanController::class, 'import'])->name('pendidikan.import');
Route::delete('/pendidikan/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');
Route::get('/export-pendidikan', [PendidikanController::class, 'export'])->name('export.pendidikan');


Route::resource('pekerjaan', PekerjaanController::class);
Route::get('/pekerjaan/{id}/detail', [PekerjaanController::class, 'detail'])->name('pekerjaan.detail');
Route::post('/pekerjaan/import', [PekerjaanController::class, 'import'])->name('pekerjaan.import');
Route::delete('/pekerjaan/{id}', [PekerjaanController::class, 'destroy'])->name('pekerjaan.destroy');
Route::get('/export-pekerjaan', [PekerjaanController::class, 'export'])->name('export.pekerjaan');


Route::resource('statuskawin', StatusKawinController::class);
Route::get('/statuskawin/{id}/detail', [StatuskawinController::class, 'detail'])->name('statuskawin.detail');
Route::post('/statuskawin/import', [StatusKawinController::class, 'import'])->name('statuskawin.import');
Route::delete('/statuskawin/{id}', [StatusKawinController::class, 'destroy'])->name('statuskawin.destroy');
Route::get('/export-statuskawin', [StatuskawinController::class, 'export'])->name('export.statuskawin');


Route::resource('goldarah', GoldarahController::class);
Route::get('/goldarah/{id}/detail', [GoldarahController::class, 'detail'])->name('goldarah.detail');
Route::post('/goldarah/import', [GoldarahController::class, 'import'])->name('goldarah.import');
Route::delete('/goldarah/{id}', [GoldarahController::class, 'destroy'])->name('goldarah.destroy');
Route::get('/export-goldarah', [GoldarahController::class, 'export'])->name('export.goldarah');


Route::resource('disabilitas', DisabilitasController::class);
Route::get('/disabilitas/{id}/detail', [DisabilitasController::class, 'detail'])->name('disabilitas.detail');
Route::post('/disabilitas/import', [DisabilitasController::class, 'import'])->name('disabilitas.import');
Route::delete('/disabilitas/{id}', [DisabilitasController::class, 'destroy'])->name('disabilitas.destroy');
Route::get('/export-disabilitas', [disabilitasController::class, 'export'])->name('export.disabilitas');




