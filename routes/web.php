<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\TindakanController;
use App\Http\Controllers\WilayahController;
use App\Models\Tindakan;
use App\Models\Wilayah;
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


Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::resource('/dashboard/wilayah',WilayahController::class);
// Route::resource('/dashboard/dokter',Dokter::class);
Route::resource('/dashboard/tindakan',TindakanController::class);
Route::resource('/dashboard/obat',ObatController::class);
Route::resource('/dashboard/pendaftaran',PasienController::class);
Route::get('/dashboard', function(){
    return view('dashboard.index');
});
