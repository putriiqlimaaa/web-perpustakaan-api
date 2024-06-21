<?php

use App\Http\Controllers\Api\Anggotacontroller;
use App\Http\Controllers\Api\Bukucontroller;
use App\Http\Controllers\Api\Penguruscontroller;
use App\Http\Controllers\Api\Peminjamancontroller;
use App\Http\Controllers\Api\Pengembaliancontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('buku', [Bukucontroller::class, 'index']);
Route::get('buku/{id}', [BukuController::class, 'show']);
Route::post('buku', [BukuController::class, 'store']);
Route::put('buku/{id}', [BukuController::class, 'update']);
Route::delete('buku/{id}', [BukuController::class, 'destroy']);

Route::get('anggota', [Anggotacontroller::class, 'index']);
Route::get('anggota/{id}', [AnggotaController::class, 'show']);
Route::post('anggota', [AnggotaController::class, 'store']);
Route::put('anggota/{id}', [AnggotaController::class, 'update']);
Route::delete('anggota/{id}', [AnggotaController::class, 'destroy']);

Route::get('pengurus', [Penguruscontroller::class, 'index']);
Route::get('pengurus/{id}', [PengurusController::class, 'show']);
Route::post('pengurus', [PengurusController::class, 'store']);
Route::put('pengurus/{id}', [PengurusController::class, 'update']);
Route::delete('pengurus/{id}', [PengurusController::class, 'destroy']);

Route::get('peminjaman', [Peminjamancontroller::class, 'index']);
Route::get('peminjaman/{id}', [PeminjamanController::class, 'show']);
Route::post('peminjaman', [PeminjamanController::class, 'store']);
Route::put('peminjaman/{id}', [PeminjamanController::class, 'update']);
Route::delete('peminjaman/{id}', [PeminjamanController::class, 'destroy']);

Route::get('pengembalian', [Pengembaliancontroller::class, 'index']);
Route::get('pengembalian/{id}', [PengembalianController::class, 'show']);
Route::post('pengembalian', [PengembalianController::class, 'store']);
Route::put('pengembalian/{id}', [PengembalianController::class, 'update']);
Route::delete('pengembalian/{id}', [PengembalianController::class, 'destroy']);