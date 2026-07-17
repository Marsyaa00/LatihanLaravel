<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', [WelcomeController::class, 'hello']);

Route::get('siswa', function ($id) {}); 
Route::post('siswa', function ($id) {}); 
Route::put('siswa', function ($id) {}); 
Route::delete('siswa', function ($id) {}); 
Route::get('siswa/{id}', function ($id) {}); 
Route::put('siswa/{id}', function ($id) {}); 
Route::delete('siswa/{id}', function ($id) {});

Route::get('/', function ($id) { 
    echo " Hi! Selamat Datang di Website Laravel";}); 

Route::get('/about', function () {
    echo "Nama : Marsya Aulia Putri M. <br> NIM : 25990 <br> Kelas : XI-RPB <br> "; 
    echo "Nama : Merryza Herdyan R. <br> NIM : 25995 <br> Kelas : XI-RPB <br> ";
    echo "Nama : Sheila Dwi A. <br> NIM : 25998 <br> Kelas : XI-RPB"; 
});

Route::get('/articles/1', function () {
    echo "Halaman Artikel dengan ID : 1";
});
