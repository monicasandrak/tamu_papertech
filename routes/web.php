<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_kelola_tamu;
use App\Http\Controllers\c_kelola_tamu2;
use App\Http\Controllers\c_user;
use App\Http\Controllers\c_kelola_security;
use App\Http\Controllers\c_kelola_perawat;
use App\Http\Controllers\c_kelola_dokter;
use App\Http\Controllers\c_kelola_pasien;
use App\Http\Controllers\c_kelola_obat;
use App\Http\Controllers\c_laporan_tamu;
use App\Http\Controllers\c_laporan_klinik;
use App\Http\Controllers\c_laporan_pegawai;
use App\Http\Controllers\c_laporan_obat;
use App\Http\Controllers\c_login;
use App\Http\Controllers\c_tamu;
use Illuminate\Routing\RouteGroup;

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

// Route::get('/', function () {
//     return view('page_tamu');
// });



Route::get('/dashboard', function () {
    return view('security/v_dashboard');
});

Route::get('/laporan', function () {
    return view('security/v_laporan');
});

Route::get('/kelola_pasien', [c_kelola_pasien::class,'index'])->name('pasien');
Route::get('/pasien/add', [c_kelola_pasien::class,'add']);
Route::post('/pasien/insert', [c_kelola_pasien::class,'insert'])->name('insert_pasien');
Route::get('/pasien/delete/{id_pasien}', [c_kelola_pasien::class, 'delete']);
Route::get('/pasien/detail/{id_pasien}', [c_kelola_pasien::class, 'detail']);
Route::get('/pasien/edit/{id_pasien}', [c_kelola_pasien::class, 'edit']);
Route::put('/pasien/update/{id_pasien}', [c_kelola_pasien::class,'update'])->name('update_pasien');
Route::get('/kelola_pasien_tamu', [c_kelola_tamu2::class,'index'])->name('pasien_tamu');
Route::get('/pasien_tamu/edit/{id_tamu}', [c_kelola_tamu2::class, 'edit']);
Route::put('/pasien_tamu/update/{id_tamu}', [c_kelola_tamu2::class,'update'])->name('update_tamu');
Route::get('/pasien_tamu/detail/{id_pasien}', [c_kelola_tamu2::class, 'detail']);
Route::get('/kelola_obat', [c_kelola_obat::class,'index'])->name('obat');
Route::get('/obat/add', [c_kelola_obat::class,'add']);
Route::post('/obat/insert', [c_kelola_obat::class,'insert'])->name('insert_obat');
Route::get('/obat/delete/{id_obat}', [c_kelola_obat::class, 'delete']);
Route::get('/obat/detail/{id_obat}', [c_kelola_obat::class, 'detail']);
Route::get('/obat/edit/{id_obat}', [c_kelola_obat::class, 'edit']);
Route::put('/obat/update/{id_obat}', [c_kelola_obat::class,'update'])->name('update_obat');
Route::get('/laporan_klinik', [c_laporan_klinik::class, 'index'])->name('laporan_klinik');
Route::get('/laporan/print_laporan_tamu', [c_laporan_klinik::class, 'laporan'])->name('lihat_laporan_tamu');
Route::get('/laporan/print_laporan_pegawai', [c_laporan_pegawai::class, 'laporan'])->name('lihat_laporan_pegawai');
Route::get('/laporan/print_laporan_obat', [c_laporan_obat::class, 'laporan'])->name('lihat_laporan_obat');

Route::get('/kelola_perawat', [c_kelola_perawat::class,'index'])->name('perawat');
Route::get('/perawat/add', [c_kelola_perawat::class,'add']);
Route::post('/perawat/insert', [c_kelola_perawat::class,'insert'])->name('insert_perawat');
Route::get('/perawat/edit/{id_perawat}', [c_kelola_perawat::class,'edit']);
Route::put('/perawat/update/{id_perawat}', [c_kelola_perawat::class,'update'])->name('update_perawat');
Route::get('/perawat/delete/{id_perawat}', [c_kelola_perawat::class,'delete']);
Route::get('/perawat/detail/{id_perawat}', [c_kelola_perawat::class,'detail']);

Route::get('/kelola_dokter', [c_kelola_dokter::class,'index'])->name('dokter');
Route::get('/dokter/add', [c_kelola_dokter::class,'add']);
Route::post('/dokter/insert', [c_kelola_dokter::class,'insert'])->name('insert_dokter');
Route::get('/dokter/edit/{id_dokter}', [c_kelola_dokter::class,'edit']);
Route::put('/dokter/update/{id_dokter}', [c_kelola_dokter::class,'update'])->name('update_dokter');
Route::get('/dokter/delete/{id_dokter}', [c_kelola_dokter::class,'delete']);
Route::get('/dokter/detail/{id_dokter}', [c_kelola_dokter::class,'detail']);

Route::get('/', [c_tamu::class,'index'])->name('form_tamu');
Route::get('/form_tamu/add', [c_tamu::class,'add'])->name('add_form_tamu');
Route::post('/form_tamu/insert', [c_tamu::class,'insert'])->name('insert_form_tamu');

Route::get('/kelola_tamu', [c_kelola_tamu::class,'index'])->name('tamu');
Route::get('/tamu/add', [c_kelola_tamu::class,'add']);
Route::post('/tamu/insert', [c_kelola_tamu::class,'insert'])->name('insert_tamu');
Route::get('/tamu/edit/{id_tamu}', [c_kelola_tamu::class,'edit']);
Route::put('/tamu/update/{id_tamu}', [c_kelola_tamu::class,'update'])->name('update_tamu');
Route::get('/tamu/delete/{id_tamu}', [c_kelola_tamu::class,'delete']);
Route::get('/tamu/detail/{id_tamu}', [c_kelola_tamu::class,'detail']);

Route::get('/kelola_security', [c_kelola_security::class,'index'])->name('security');
Route::get('/security/add', [c_kelola_security::class,'add']);
Route::post('/security/insert', [c_kelola_security::class,'insert'])->name('insert_security');
Route::get('/security/edit/{id_security}', [c_kelola_security::class,'edit']);
Route::put('/security/update/{id_security}', [c_kelola_security::class,'update'])->name('update_security');
Route::get('/security/delete/{id_security}', [c_kelola_security::class,'delete']);
Route::get('/security/detail/{id_security}', [c_kelola_security::class,'detail']);

Route::get('/laporan', [c_laporan_tamu::class, 'index'])->name('laporan_tamu');
Route::get('/laporan/print_laporan', [c_laporan_tamu::class, 'laporan'])->name('lihat_laporan_tamu');
Route::get('/login', [c_user::class, 'login'])->name('login');
Route::post('/login', [c_user::class, 'login_action'])->name('login_action');

Route::get('/kelola_user', [c_user::class,'index'])->name('user');
Route::get('/user/add', [c_user::class,'add']);
Route::post('/user/insert', [c_user::class,'insert'])->name('insert_user');
Route::get('/user/edit/{id_user}', [c_user::class,'edit']);
Route::put('/user/update/{id_user}', [c_user::class,'update'])->name('update_user');
Route::get('/user/delete/{id_user}', [c_user::class,'delete']);
Route::get('/user/detail/{id_user}', [c_user::class,'detail']);
Route::get('/laporan_user', [c_user::class, 'laporan'])->name('laporan_user');

Route::get('/password', [c_user::class, 'password'])->name('password');
Route::get('/account', [c_user::class, 'account'])->name('account');
Route::post('/password', [c_user::class, 'password_action'])->name('password.action');
Route::put('/account', [c_user::class,'account_action'])->name('account.action');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tamu', App\Http\Controllers\c_kelola_tamu::class);

Route::get('/login', [c_login::class, 'login'])->name('login');
Route::post('/postlogin', [c_login::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [c_login::class, 'logout'])->name('logout');

// Route::group(['middleware' => ['auth', 'ceklevel:security,klinik,admin']], function(){
//     Route::get('/dashboard', function () { 
//         return view('security/v_dashboard');
//     });
// });

Route::group(['middleware' => ['auth', 'ceklevel:security,klinik,admin']], function(){
    Route::get('/dashboard', [c_user::class, 'dashboard'])->name('dashboard'); 
        
});