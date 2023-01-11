<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('login/index');
});

// login
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// Route::get('/register', [LoginController::class, 'register']);
// Route::post('/register', [LoginController::class, 'registration']);

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
Route::get('guru/lessons/detail', function () {
    return view('guru.detail');
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