<?php

use App\Http\Controllers\ReffBhsAsingController;
use App\Http\Controllers\BahasaController;
use App\Http\Controllers\BahasaAsingController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::controller(ReffBhsAsingController::class)->prefix('reff_bhs_asing')->group(function () {
    Route::get('','index')->name('reff_bhs_asing');
    Route::get('tambah','tambah')->name('reff_bhs_asing.tambah');
    Route::post('tambah','simpan')->name('reff_bhs_asing.tambah.simpan');
    Route::get('edit/{id}','edit')->name('reff_bhs_asing.edit');
    Route::post('edit/{id}','update')->name('reff_bhs_asing.tambah.update');
    Route::get('hapus/{id}','hapus')->name('reff_bhs_asing.hapus');
});

Route::controller(BahasaController::class)->prefix('bahasa')->group(function () {
    Route::get('','index')->name('bahasa');
    Route::get('tambah','tambah')->name('bahasa.tambah');
    Route::post('tambah','simpan')->name('bahasa.tambah.simpan');
    Route::get('edit/{id}','edit')->name('bahasa.edit');
    Route::post('edit/{id}','update')->name('bahasa.tambah.update');
    Route::get('hapus/{id}','hapus')->name('bahasa.hapus');
});

Route::controller(BahasaAsingController::class)->prefix('bahasa_asing')->group(function () {
    Route::get('','index')->name('bahasa_asing');
    Route::get('tambah','tambah')->name('bahasa_asing.tambah');
    Route::post('tambah','simpan')->name('bahasa_asing.tambah.simpan');
    Route::get('edit/{id}','edit')->name('bahasa_asing.edit');
    Route::post('edit/{id}','update')->name('bahasa_asing.tambah.update');
    Route::get('hapus/{id}','hapus')->name('bahasa_asing.hapus');    
    Route::get('inggris','inggris')->name('bahasa_asing.inggris');    
    Route::get('german','german')->name('bahasa_asing.german');    
    Route::get('korea','korea')->name('bahasa_asing.korea');    
});