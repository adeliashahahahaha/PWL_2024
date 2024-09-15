<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
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


