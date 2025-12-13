<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);



Route::middleware('auth:sanctum')->group(function () {

    // LOGOUT
    Route::post('/logout', [AuthController::class, 'logout']);

  
    Route::post('/siswa/create', [SiswaController::class, 'store']);
    Route::get('/siswa/read', [SiswaController::class, 'index']);
    Route::put('/siswa/update/{id}', [SiswaController::class, 'update']);
    Route::delete('/siswa/delete/{id}', [SiswaController::class, 'destroy']);


 
    Route::post('/guru/create', [GuruController::class, 'store']);
    Route::get('/guru/read', [GuruController::class, 'index']);
    Route::put('/guru/update/{id}', [GuruController::class, 'update']);
    Route::delete('/guru/delete/{id}', [GuruController::class, 'destroy']);


   
    Route::post('/kelas/create', [KelasController::class, 'store']);
    Route::get('/kelas/read', [KelasController::class, 'index']);
    Route::put('/kelas/update/{id}', [KelasController::class, 'update']);
    Route::delete('/kelas/delete/{id}', [KelasController::class, 'destroy']);
    
});
