<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

// PRAKTIKUM 1
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'Adelia Syaharani Hermawan | 2241760066';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($postId) {
    return 'Article ke-' . $postId;
});

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name; 
// });

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});


//PRAKTIKUM 2  
Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles', [PageController::class, 'articles']);
Route::get('/article/{id}', [PageController::class, 'article']);

Route::middleware('auth')->group(function () {
    Route::get('/', HomeController::class, '__invoke'); // Home route
    Route::get('/about', AboutController::class); // About route
    Route::get('/article/{id}', ArticleController::class)->name('article'); // Dynamic article route
});

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);

// PRAKTIKUM 3 

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Adell']);
});

Route::get('/greeting', [WelcomeController::class,'greeting']);
