<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function () {
    return view('login.index');
});
Route::get('guru', function () {
    return view('guru.index');
});
Route::get('siswa', function () {
    return view('siswa.index');
});
Route::get('siswa/contact', function () {
    return view('siswa.contact');
});
Route::get('siswa/lessons', function () {
    return view('siswa.lessons');
});