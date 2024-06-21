<?php

use Illuminate\Support\Facades\Route;


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
    return view('halaman_utama');
});

Route::get('/signUp', [App\Http\Controllers\signUpController::class, 'index']);
Route::post('/simpan_signUp', [App\Http\Controllers\signUpController::class, 'store']);
Route::get('/signIn', [App\Http\Controllers\signUpController::class, 'showsignin']);
Route::post('/simpan_signIn', [App\Http\Controllers\signUpController::class, 'SignIn']);

Route::get('/signIn_pengguna',  [App\Http\Controllers\userSignUpController::class, 'showsigninpengguna']);
Route::post('/simpan_usersignIn',  [App\Http\Controllers\userSignUpController::class, 'userSignIn']);
Route::get('/signUp_pengguna', [App\Http\Controllers\userSignUpController::class, 'index']);
Route::post('/simpan_userSignUp', [App\Http\Controllers\userSignUpController::class, 'store']);

Route::get('/user_halaman', [App\Http\Controllers\userhalamanController::class, 'index']);


Route::get('/dashboard', [App\Http\Controllers\indexController::class, 'index']);

Route::get('/data_anggota', [App\Http\Controllers\anggotaController::class, 'index']);
Route::get('/data_buku', [App\Http\Controllers\bukuController::class, 'index']);
Route::get('/data_peminjaman', [App\Http\Controllers\peminjamanController::class, 'index']);
Route::get('/data_pengembalian', [App\Http\Controllers\pengembalianController::class, 'index']);
Route::get('/data_pengurus', [App\Http\Controllers\pengurusController::class, 'index']);





//tambah_data
Route::get('/tambah_anggota', [App\Http\Controllers\anggotaController::class, 'create']);
Route::post('/simpan_anggota', [App\Http\Controllers\anggotaController::class, 'store']);

Route::get('/tambah_buku', [App\Http\Controllers\bukuController::class, 'create']);
Route::post('/simpan_buku', [App\Http\Controllers\bukuController::class, 'store']);

Route::get('/tambah_peminjaman', [App\Http\Controllers\peminjamanController::class, 'create']);
Route::post('/simpan_peminjaman', [App\Http\Controllers\peminjamanController::class, 'store']);

Route::get('/tambah_pengembalian', [App\Http\Controllers\pengembalianController::class, 'create']);
Route::post('/simpan_pengembalian', [App\Http\Controllers\pengembalianController::class, 'store']);

Route::get('/tambah_pengurus', [App\Http\Controllers\pengurusController::class, 'create']);
Route::post('/simpan_pengurus', [App\Http\Controllers\pengurusController::class, 'store']);

Route::get('/edit_anggota/{id}', [App\Http\Controllers\anggotaController::class, 'edit']);
Route::put('/update_anggota/{id}', [App\Http\Controllers\anggotaController::class, 'update']);
Route::delete('/hapus_anggota/{id}', [App\Http\Controllers\anggotaController::class, 'destroy']);

Route::get('/edit_buku/{id}', [App\Http\Controllers\bukuController::class, 'edit']);
Route::put('/update_buku/{id}', [App\Http\Controllers\bukuController::class, 'update']);
Route::delete('/hapus_buku/{id}', [App\Http\Controllers\bukuController::class, 'destroy']);

Route::get('/edit_peminjaman/{id}', [App\Http\Controllers\peminjamanController::class, 'edit']);
Route::put('/update_peminjaman/{id}', [App\Http\Controllers\peminjamanController::class, 'update']);
Route::delete('/hapus_peminjaman/{id}', [App\Http\Controllers\peminjamanController::class, 'destroy']);

Route::get('/edit_pengembalian/{id}', [App\Http\Controllers\pengembalianController::class, 'edit']);
Route::put('/update_pengembalian/{id}', [App\Http\Controllers\pengembalianController::class, 'update']);
Route::delete('/hapus_pengembalian/{id}', [App\Http\Controllers\pengembalianController::class, 'destroy']);

Route::get('/edit_pengurus/{id}', [App\Http\Controllers\pengurusController::class, 'edit']);
Route::put('/update_pengurus/{id}', [App\Http\Controllers\pengurusController::class, 'update']);
Route::delete('/hapus_pengurus/{id}', [App\Http\Controllers\pengurusController::class, 'destroy']);


//search_data
Route::get('/search_anggota', [App\Http\Controllers\anggotaController::class, 'search']);
Route::get('/search_buku', [App\Http\Controllers\bukuController::class, 'search']);
Route::get('/search_peminjaman', [App\Http\Controllers\peminjamanController::class, 'search']);
Route::get('/search_pengembalian', [App\Http\Controllers\pengembalianController::class, 'search']);
Route::get('/search_pengurus', [App\Http\Controllers\pengurusController::class, 'search']);


Route::get('/form_peminjaman', [App\Http\Controllers\formpeminjamanController::class, 'index']);
Route::get('/tambah_formpeminjaman', [App\Http\Controllers\formpeminjamanController::class, 'create']);
Route::post('/simpan_formpeminjaman', [App\Http\Controllers\formpeminjamanController::class, 'store']);

Route::get('/daftar_pinjam', [App\Http\Controllers\daftarpinjamController::class, 'index']);
Route::get('/tambah_daftarpeminjaman', [App\Http\Controllers\daftarpinjamController::class, 'create']);
Route::post('/simpan_daftarpeminjaman', [App\Http\Controllers\daftarpinjamController::class, 'store']);
Route::put('/update_daftarpeminjaman/{id}', [App\Http\Controllers\daftarpinjamController::class, 'update']);
Route::get('/search_daftarpeminjaman', [App\Http\Controllers\daftarpinjamController::class, 'search']);
Route::delete('/hapus_daftarpeminjaman/{id}', [App\Http\Controllers\daftarpinjamController::class, 'destroy']);

Route::get('/daftar_pengembalian', [App\Http\Controllers\daftarpengembalianController::class, 'index']);
Route::get('/tambah_daftarpengembalian', [App\Http\Controllers\daftarpengembalianController::class, 'create']);
Route::post('/simpan_daftarpengembalian', [App\Http\Controllers\daftarpengembalianController::class, 'store']);
Route::get('/search_daftarpengembalian', [App\Http\Controllers\daftarpengembalianController::class, 'search']);

Route::get('/profil', [App\Http\Controllers\profilController::class, 'index']);
Route::post('/simpan_profil', [App\Http\Controllers\profilController::class, 'store']);
