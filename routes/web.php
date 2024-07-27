<?php

use App\Http\Controllers\FrontController;
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

        Route::get('/data/jurusan', [SuperadminController::class, 'jurusan']);
        Route::get('/data/jurusan/add', [SuperadminController::class, 'jurusan_add']);
        Route::post('/data/jurusan/add', [SuperadminController::class, 'jurusan_store']);
        Route::get('/data/jurusan/edit/{id}', [SuperadminController::class, 'jurusan_edit']);
        Route::post('/data/jurusan/edit/{id}', [SuperadminController::class, 'jurusan_update']);
        Route::post('/data/jurusan/delete', [SuperadminController::class, 'jurusan_delete']);

        Route::get('/setting/role', [SuperadminController::class, 'role']);
        Route::get('/setting/role/add', [SuperadminController::class, 'role_add']);
        Route::post('/setting/role/add', [SuperadminController::class, 'role_store']);
        Route::get('/setting/role/edit/{id}', [SuperadminController::class, 'role_edit']);
        Route::post('/setting/role/edit/{id}', [SuperadminController::class, 'role_update']);
        Route::post('/setting/role/delete', [SuperadminController::class, 'role_delete']);

        Route::get('/data/matakuliah', [SuperadminController::class, 'matakuliah']);
        Route::get('/data/kurikulum', [SuperadminController::class, 'kurikulum']);
        Route::get('/data/mahasiswa', [SuperadminController::class, 'mahasiswa']);
    });
});
