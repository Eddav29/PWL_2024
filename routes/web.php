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
//*Basic Routing
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
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