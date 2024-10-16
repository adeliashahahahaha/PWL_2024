<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


//JS 7 PRAKTIKUM 1
Route::pattern('id', '[0-9]+'); //artinya ketika ada parameter {id}, maka harus berupa angka

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth');

Route::middleware(['auth'])->group(function() { // semua route di dalam group harus login dulu
    // masukkan semua route yang perlu autentikasi di sini

    Route::get('/', [WelcomeController::class, 'index']);

    // --------- JS 5 - PRAKTIKUM 3 ---------

    //JS 7 PRAKTIKUM 2
    //Route::group(['prefix' => 'level'], function () {
    //artinya semua route di dalam group ini harus punya role ADM (administrator)
    // Route::middleware(['authorize:ADM'])->group(function() {
    //     Route::get('/', [LevelController::class, 'index']);
    //     Route::post('/list', [LevelController::class, 'list'])->name('level.list');
    //     Route::get('/create', [LevelController::class, 'create']);
    //     Route::post('/', [LevelController::class, 'store']);
    //     Route::get('/create_ajax', [LevelController::class, 'create_ajax']);
    //     Route::post('/ajax', [LevelController::class, 'store_ajax']);
    //     Route::get('/{id}', [LevelController::class, 'show']);
    //     Route::get('/{id}/edit', [LevelController::class, 'edit']);
    //     Route::put('/{id}', [LevelController::class, 'update']);
    //     Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
    //     Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);
    //     Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
    //     Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
    //     Route::delete('/{id}', [LevelController::class, 'destroy']);
    // });


    // Route::group(['prefix' => 'kategori'], function () {
    //     Route::get('/', [KategoriController::class, 'index']);
    //     Route::post('/list', [KategoriController::class, 'list'])->name('kategori.list');
    //     Route::get('/create', [KategoriController::class, 'create']);
    //     Route::post('/', [KategoriController::class, 'store']);
    //     Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);
    //     Route::post('/ajax', [KategoriController::class, 'store_ajax']);
    //     Route::get('/{id}', [KategoriController::class, 'show']);
    //     Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    //     Route::put('/{id}', [KategoriController::class, 'update']);
    //     Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
    //     Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
    //     Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
    //     Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
    //     Route::delete('/{id}', [KategoriController::class, 'destroy']);
    // });

    // Route::group(['prefix' => 'user'], function (){
    //     Route::get('/', [UserController::class, 'index']);              // tampil halaman awal
    //     Route::post('/list', [UserController::class, 'list'])->name('user.list');          // tampil list data user
    //     Route::get('/create', [UserController::class, 'create']);       // create user baru
    //     Route::post('/', [UserController::class, 'store']);             // simpan data user baru
    //     Route::get('/create_ajax', [UserController::class, 'create_ajax']);
    //     Route::post('/ajax', [UserController::class, 'store_ajax']);
    //     Route::get('/{id}', [UserController::class, 'show']);           // lihat detail user
    //     Route::get('/{id}/edit', [UserController::class, 'edit']);      // edit user
    //     Route::put('/{id}', [UserController::class, 'update']);         // simpan update data
    //     Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);      // AJAX edit user
    //     Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);         // AJAX simpan update data
    //     Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);      // AJAX form confirm
    //     Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']);     // AJAX hapus data user
    //     Route::delete('/{id}', [UserController::class, 'destroy']);     // hapus data user
    // });

    //Route::group(['prefix' => 'barang'], function () {
    //JS 7 PRAKTIKUM 3
    //artinya semua route di dalam group ini harus punya role ADM (administrator) dan MNG (Manager)
//     Route::middleware(['authorize:ADM,MNG'])->group(function() {
//         Route::get('/', [BarangController::class, 'index']);
//         Route::post('/list', [BarangController::class, 'list'])->name('barang.list');
//         Route::get('/create', [BarangController::class, 'create']);
//         Route::post('/', [BarangController::class, 'store']);
//         Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
//         Route::post('/ajax', [BarangController::class, 'store_ajax']);
//         Route::get('/{id}', [BarangController::class, 'show']);
//         Route::get('/{id}/edit', [BarangController::class, 'edit']);
//         Route::put('/{id}', [BarangController::class, 'update']);
//         Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
//         Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
//         Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
//         Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
//         Route::delete('/{id}', [BarangController::class, 'destroy']);
//     });

//     Route::group(['prefix' => 'supplier'], function () {
//         Route::get('/', [SupplierController::class, 'index']);
//         Route::post('/list', [SupplierController::class, 'list'])->name('supplier.list');
//         Route::get('/create', [SupplierController::class, 'create']);
//         Route::post('/', [SupplierController::class, 'store']);
//         Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);
//         Route::post('/ajax', [SupplierController::class, 'store_ajax']);
//         Route::get('/{id}', [SupplierController::class, 'show']);
//         Route::get('/{id}/edit', [SupplierController::class, 'edit']);
//         Route::put('/{id}', [SupplierController::class, 'update']);
//         Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
//         Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
//         Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
//         Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
//         Route::delete('/{id}', [SupplierController::class, 'destroy']);
//     });

// });

// JS 7 | Tugas 3
//Semua route di grup ini harus punya role ADM (Administrator)
Route::group(['prefix' => 'user', 'middleware'=> 'authorize:ADM'], function(){
    Route::get('/', [UserController::class, 'index']);                          //menampilkan laman awal user
    Route::post('/list', [UserController::class, 'list']);                      //menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);                   //menampilkan laman form tambah user
    Route::post('/', [UserController::class, 'store']);                         //menyimpan data user baru
    Route::get('/create_ajax', [UserController::class, 'create_ajax']);         //menampilkan laman form tambah user AJAX
    Route::post('/ajax', [UserController::class, 'store_ajax']);                //menyimpan data user baru AJAX
    Route::get('/{id}', [UserController::class, 'show']);                       //menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);                  //menampilkan laman form edit user
    Route::put('/{id}', [UserController::class, 'update']);                     //menyimpan perubahan data user
    Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);        //menampilkan laman form edit user AJAX
    Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);    //menyimpan perubahan data user AJAX
    Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);   //menampilkan form confirm hapus data user AJAX
    Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); //menghapus data user AJAX
    Route::delete('/{id}', [UserController::class, 'destroy']);                 //menghapus data user
});

//Semua route di grup ini harus punya role ADM (Administrator)
Route::group(['prefix' => 'level', 'middleware'=> 'authorize:ADM'], function(){
    Route::get('/', [LevelController::class, 'index']);                             //menampilkan laman awal level
    Route::post('/list', [LevelController::class, 'list']);                         //menampilkan data level dalam bentuk json untuk datatables
    Route::get('/create_ajax', [LevelController::class, 'create_ajax']);            //menampilkan laman form tambah level AJAX
    Route::post('/ajax', [LevelController::class, 'store_ajax']);                   //menyimpan data level baru AJAX
    Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);           //menampilkan laman form edit level AJAX
    Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);       //menyimpan perubahan data level AJAX
    Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);      //menampilkan form confirm hapus data level AJAX
    Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);    //menghapus data level AJAX
});

//Semua route di grup ini harus punya role ADM (Administrator) dan MNG (Manager)
Route::group(['prefix' => 'kategori', 'middleware'=> 'authorize:ADM,MNG'], function(){
    Route::get('/', [KategoriController::class, 'index']);                              //menampilkan laman awal kategori
    Route::post('/list', [KategoriController::class, 'list']);                          //menampilkan data kategori dalam bentuk json untuk datatables
    Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);             //menampilkan laman form tambah kategori AJAX
    Route::post('/ajax', [KategoriController::class, 'store_ajax']);                    //menyimpan data kategori baru AJAX
    Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);            //menampilkan laman form edit kategori AJAX
    Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);        //menyimpan perubahan data kategori AJAX
    Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);       //menampilkan form confirm hapus data kategori AJAX
    Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);     //menghapus data kategori AJAX
});

//Semua route di grup ini harus punya role ADM (Administrator)
Route::group(['prefix' => 'supplier', 'middleware'=> 'authorize:ADM,MNG'], function(){
    Route::get('/', [SupplierController::class, 'index']);                              //menampilkan laman awal supplier
    Route::post('/list', [SupplierController::class, 'list']);                          //menampilkan data supplier dalam bentuk json untuk datatables
    Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);             //menampilkan laman form tambah supplier AJAX
    Route::post('/ajax', [SupplierController::class, 'store_ajax']);                    //menyimpan data supplier baru AJAX
    Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);            //menampilkan laman form edit supplier AJAX
    Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);        //menyimpan perubahan data supplier AJAX
    Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);       //menampilkan form confirm hapus data supplier AJAX
    Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);     //menghapus data supplier AJAX
});

//Semua route di grup ini harus punya role ADM (Administrator) dan MNG (Manager)
Route::group(['prefix' => 'barang', 'middleware'=> 'authorize:ADM,MNG'], function(){
    Route::get('/', [BarangController::class, 'index']);                                //menampilkan laman awal barang
    Route::post('/list', [BarangController::class, 'list']);                            //menampilkan data barang dalam bentuk json untuk datatables
    Route::get('/create_ajax', [BarangController::class, 'create_ajax']);               //menampilkan laman form tambah barang AJAX
    Route::post('/ajax', [BarangController::class, 'store_ajax']);                      //menyimpan data barang baru AJAX
    Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);              //menampilkan laman form edit barang AJAX
    Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);          //menyimpan perubahan data barang AJAX
    Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);         //menampilkan form confirm hapus data barang AJAX
    Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);       //menghapus data barang AJAX
});
});



// Route::get('/test', function() {
//     return 'Route is working!';
// });

// //FACADES QUERY
// Route::get('/', function(){
//     return view('welcome');
// });

// Route::get('/level', [LevelController::class, 'index']);

// //QUERY BUILDER

// Route::get('/kategori', [KategoriController::class, 'index']);

// //ORM

// Route::get('/user', [UserController::class, 'index']);

// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route::put('/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('user.ubah_simpan');

// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
