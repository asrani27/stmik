<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SuperadminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LogoutController::class, 'logout']);


Route::middleware(['superadmin'])->group(function () {
    Route::prefix('superadmin')->group(function () {
        Route::get('/beranda', [SuperadminController::class, 'beranda']);

        Route::get('/data/periode', [SuperadminController::class, 'periode']);
        Route::get('/data/periode/add', [SuperadminController::class, 'periode_add']);
        Route::post('/data/periode/add', [SuperadminController::class, 'periode_store']);
        Route::get('/data/periode/edit/{id}', [SuperadminController::class, 'periode_edit']);
        Route::post('/data/periode/edit/{id}', [SuperadminController::class, 'periode_update']);
        Route::post('/data/periode/delete', [SuperadminController::class, 'periode_delete']);

        Route::get('/data/jurusan', [SuperadminController::class, 'jurusan']);
        Route::get('/data/jurusan/add', [SuperadminController::class, 'jurusan_add']);
        Route::post('/data/jurusan/add', [SuperadminController::class, 'jurusan_store']);
        Route::get('/data/jurusan/edit/{id}', [SuperadminController::class, 'jurusan_edit']);
        Route::post('/data/jurusan/edit/{id}', [SuperadminController::class, 'jurusan_update']);
        Route::post('/data/jurusan/delete', [SuperadminController::class, 'jurusan_delete']);

        Route::get('/data/matakuliah', [SuperadminController::class, 'matakuliah']);
        Route::get('/data/matakuliah/add', [SuperadminController::class, 'matakuliah_add']);
        Route::post('/data/matakuliah/add', [SuperadminController::class, 'matakuliah_store']);
        Route::get('/data/matakuliah/edit/{id}', [SuperadminController::class, 'matakuliah_edit']);
        Route::post('/data/matakuliah/edit/{id}', [SuperadminController::class, 'matakuliah_update']);
        Route::post('/data/matakuliah/delete', [SuperadminController::class, 'matakuliah_delete']);

        Route::get('/data/kurikulum', [SuperadminController::class, 'kurikulum']);
        Route::get('/data/kurikulum/add', [SuperadminController::class, 'kurikulum_add']);
        Route::post('/data/kurikulum/add', [SuperadminController::class, 'kurikulum_store']);
        Route::get('/data/kurikulum/edit/{id}', [SuperadminController::class, 'kurikulum_edit']);
        Route::get('/data/kurikulum/detail/{id}', [SuperadminController::class, 'kurikulum_detail']);
        Route::post('/data/kurikulum/detail/{id}', [SuperadminController::class, 'kurikulum_detail_store']);
        Route::post('/data/kurikulum/delete-detail', [SuperadminController::class, 'kurikulum_detail_delete']);
        Route::post('/data/kurikulum/edit/{id}', [SuperadminController::class, 'kurikulum_update']);
        Route::post('/data/kurikulum/delete', [SuperadminController::class, 'kurikulum_delete']);

        Route::get('/setting/role', [SuperadminController::class, 'role']);
        Route::get('/setting/role/add', [SuperadminController::class, 'role_add']);
        Route::post('/setting/role/add', [SuperadminController::class, 'role_store']);
        Route::get('/setting/role/edit/{id}', [SuperadminController::class, 'role_edit']);
        Route::post('/setting/role/edit/{id}', [SuperadminController::class, 'role_update']);
        Route::post('/setting/role/delete', [SuperadminController::class, 'role_delete']);

        Route::get('/setting/import', [ImportController::class, 'index']);
        Route::post('/setting/import', [ImportController::class, 'store']);

        Route::get('/data/mahasiswa', [SuperadminController::class, 'mahasiswa']);
        Route::get('/data/mahasiswa/add', [SuperadminController::class, 'mahasiswa_add']);
        Route::post('/data/mahasiswa/add', [SuperadminController::class, 'mahasiswa_store']);
        Route::get('/data/mahasiswa/edit/{id}', [SuperadminController::class, 'mahasiswa_edit']);
        Route::get('/data/mahasiswa/createuser/{id}', [SuperadminController::class, 'mahasiswa_create_user']);
        Route::post('/data/mahasiswa/edit/{id}', [SuperadminController::class, 'mahasiswa_update']);
        Route::post('/data/mahasiswa/delete', [SuperadminController::class, 'mahasiswa_delete']);

        Route::get('/portal/informasi', [SuperadminController::class, 'portal']);
    });
});
