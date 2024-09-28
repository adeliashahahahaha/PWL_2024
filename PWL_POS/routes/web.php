<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function() {
    return 'Route is working!';
});

//FACADES QUERY
Route::get('/', function(){
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);

//QUERY BUILDER

Route::get('/kategori', [KategoriController::class, 'index']);

//ORM

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('user.ubah_simpan');

Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

// --------- JS 5 - PRAKTIKUM 3 ---------
Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function (){
    Route::get('/', [UserController::class, 'index']);              // tampil halaman awal
    Route::post('/list', [UserController::class, 'list'])->name('user.list');          // tampil list data user
    Route::get('/create', [UserController::class, 'create']);       // create user baru
    Route::post('/', [UserController::class, 'store']);             // simpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);           // lihat detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);      // edit user
    Route::put('/{id}', [UserController::class, 'update']);         // simpan update data
    Route::delete('/{id}', [UserController::class, 'destroy']);     // hapus data user

});



