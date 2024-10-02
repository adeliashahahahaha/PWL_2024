<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
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
    Route::get('/create_ajax', [UserController::class, 'create_ajax']);
    Route::post('/ajax', [UserController::class, 'store_ajax']);
    Route::get('/{id}', [UserController::class, 'show']);           // lihat detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);      // edit user
    Route::put('/{id}', [UserController::class, 'update']);         // simpan update data
    Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);      // AJAX edit user
    Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);         // AJAX simpan update data
    Route::delete('/{id}', [UserController::class, 'destroy']);     // hapus data user

});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);                  // tampil halaman awal
    Route::post('/list', [KategoriController::class, 'list'])->name('kategori.list');  // tampil list data kategori
    Route::get('/create', [KategoriController::class, 'create']);           // create kategori baru
    Route::post('/', [KategoriController::class, 'store']);                 // simpan data kategori baru
    Route::get('/{id}', [KategoriController::class, 'show']);               // lihat detail kategori
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);          // edit kategori
    Route::put('/{id}', [KategoriController::class, 'update']);             // simpan update data
    Route::delete('/{id}', [KategoriController::class, 'destroy']);         // hapus data kategori
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);                  // tampil halaman awal
    Route::post('/list', [LevelController::class, 'list'])->name('level.list');  // tampil list data kategori
    Route::get('/create', [LevelController::class, 'create']);           // create kategori baru
    Route::post('/', [LevelController::class, 'store']);                 // simpan data kategori baru
    Route::get('/{id}', [LevelController::class, 'show']);               // lihat detail kategori
    Route::get('/{id}/edit', [LevelController::class, 'edit']);          // edit kategori
    Route::put('/{id}', [LevelController::class, 'update']);             // simpan update data
    Route::delete('/{id}', [LevelController::class, 'destroy']);         // hapus data kategori
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']);                  // tampil halaman awal
    Route::post('/list', [BarangController::class, 'list'])->name('barang.list');  // tampil list data kategori
    Route::get('/create', [BarangController::class, 'create']);           // create kategori baru
    Route::post('/', [BarangController::class, 'store']);                 // simpan data kategori baru
    Route::get('/{id}', [BarangController::class, 'show']);               // lihat detail kategori
    Route::get('/{id}/edit', [BarangController::class, 'edit']);          // edit kategori
    Route::put('/{id}', [BarangController::class, 'update']);             // simpan update data
    Route::delete('/{id}', [BarangController::class, 'destroy']);         // hapus data kategori
});

Route::group(['prefix' => 'supplier'], function () {
    Route::get('/', [SupplierController::class, 'index']);                  // tampil halaman awal
    Route::post('/list', [SupplierController::class, 'list'])->name('supplier.list');  // tampil list data kategori
    Route::get('/create', [SupplierController::class, 'create']);           // create kategori baru
    Route::post('/', [SupplierController::class, 'store']);                 // simpan data kategori baru
    Route::get('/{id}', [SupplierController::class, 'show']);               // lihat detail kategori
    Route::get('/{id}/edit', [SupplierController::class, 'edit']);          // edit kategori
    Route::put('/{id}', [SupplierController::class, 'update']);             // simpan update data
    Route::delete('/{id}', [SupplierController::class, 'destroy']);         // hapus data kategori
});


