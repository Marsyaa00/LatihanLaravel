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