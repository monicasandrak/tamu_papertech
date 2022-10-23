<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_kelola_tamu;
use App\Http\Controllers\c_user;
use App\Http\Controllers\c_kelola_pasien;

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
    return view('page_tamu');
});
// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/dashboard', function () {
    return view('security/v_dashboard');
});

Route::get('/dashboardklinik', function () {
    return view('klinik/v_dashboard_klinik');
});

Route::get('/laporan', function () {
    return view('security/v_laporan');
});
// Route::get('/kelola_tamu', function () {
//     return view('security/v_kelola_tamu');
// });
// Route::get('/kelola_pasien', function () {
//     return view('klinik/v_kelola_pasien');
// });

Route::get('/kelola_pasien', [c_kelola_pasien::class,'index']);
Route::get('/pasien/add', [c_kelola_pasien::class,'add']);
Route::post('/pasien/insert', [c_kelola_pasien::class,'insert'])->name('insert_pasien');

Route::get('/kelola_tamu', [c_kelola_tamu::class,'index']);
Route::get('/tamu/add', [c_kelola_tamu::class,'add']);
Route::post('/tamu/insert', [c_kelola_tamu::class,'insert'])->name('insert_tamu');
Route::get('/tamu/edit/{id_tamu}', [c_kelola_tamu::class,'edit']);
Route::post('/tamu/update/{id_tamu}', [c_kelola_tamu::class,'update'])->name('update_tamu');

Route::get('/login', [c_user::class, 'login'])->name('login');
Route::post('/login', [c_user::class, 'login_action'])->name('login_action');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tamu', App\Http\Controllers\c_kelola_tamu::class);