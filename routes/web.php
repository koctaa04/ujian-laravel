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
Route::get('guru/studentData', function () {
    return view('guru.studentData');
});
Route::get('guru/lessons', function () {
    return view('guru.lessons');
});
Route::get('guru/lessons/questions', function () {
    return view('guru.questions');
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
Route::get('guru/settings', function () {
    return view('guru.settings');
});
Route::get('siswa/lessons/detail', function () {
    return view('siswa.detailLesson');
});
Route::get('siswa/exam', function () {
    return view('siswa.exam');
});