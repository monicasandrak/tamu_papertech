<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\c_kelola_tamu;

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
Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('layout/v_template');
});

// Route::get('/kelola_tamu', function () {
//     return view('security/v_kelola_tamu');
// });

Route::get('/kelola_tamu', [c_kelola_tamu::class,'index']);
Route::get('/tamu/add', [c_kelola_tamu::class,'add']);
Route::post('/tamu/insert', [c_kelola_tamu::class,'insert']);