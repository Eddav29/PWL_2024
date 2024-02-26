<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
/*
//*Basic Routing
Route::get('/', function () {
    return view('welcome');
});

Route::get('/world', function () {
    return 'World';
});
Route::get('/about', function () {
    return 'Nama : Eddo Dava Alfarisi <br> NIM : 2241720232';
});
//*Route Parameters
// Route::get('/user/{name}', function ($name) {
//     return 'Nama Saya '.$name;
// });
Route::get('/articles/{id}', function ($id) {
    return ' Halaman Artikel dengan ID '.$id;
});
//*Optional Parameters
// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});
//*Controller
Route::get('/hello', [WelcomeController::class,'hello']);
*/

// //*Modifikasi Controller
// Route::get('/', [PageController::class,'welcome']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/', [HomeController::class,'welcome']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticlesController::class,'articles']);