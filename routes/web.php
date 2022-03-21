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
use App\Http\Controllers\PrefixController;
use App\Http\Controllers\ParameterController;

Route::get('/', function () {
    echo "Selamat Datang di Web Kami";
});
Route::get('/aboutUs', function () {
    echo "Pemimpin Perusahaan : Ahmad Abid Baihaqi <br>
    Tanggal Didirikan : 25 Agustus 1998";
});
Route::prefix('category')->group(function(){
    Route::get('/kyt',[PrefixController::class,'kyt']);
    Route::get('/ink',[PrefixController::class,'ink']);
    Route::get('/agv',[PrefixController::class,'agv']);
});
Route::prefix('news')->group(function(){
    Route::get('/',[ParameterController::class,'rekomendasi']);
    Route::get('/{nama}',[ParameterController::class,'helm']);
});
Route::prefix('program')->group(function(){
    Route::get('/karir',[PrefixController::class,'karir']);
    Route::get('/magang',[PrefixController::class,'magang']);
    Route::get('/kunjungan_industri',[PrefixController::class,'kunjungan']);
});

