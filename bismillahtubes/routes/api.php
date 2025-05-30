<?php
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\MahasiswaController;


// Admin Routes
Route::get('admin/lomba', [AdminController::class, 'getLomba']);
Route::get('admin/verifikasi-dokumen', [AdminController::class, 'getVerifikasiDokumen']);

// Mahasiswa Routes
Route::get('mahasiswa/dokumen', [MahasiswaController::class, 'getDokumen']);
Route::get('mahasiswa/jadwal-coaching', [MahasiswaController::class, 'getJadwalCoaching']);
Route::get('mahasiswa/pendaftaran-lomba', [MahasiswaController::class, 'getPendaftaranLomba']);

