<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your applphpication. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'viewMaintenance']);

Route::get('/home-detail', [HomeController::class, 'viewHomeDetail']);

Route::get('/dev', [HomeController::class, 'viewHome']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/tentang', [HomeController::class, 'tentang']);
Route::get('/profil', [HomeController::class, 'profil']);
Route::get('/visimisi', [HomeController::class, 'visimisi']);
Route::get('/tupok', [HomeController::class, 'tupok']);
Route::get('/struktur', [HomeController::class, 'struktur']);
Route::get('/laporan', [HomeController::class, 'laporan']);
Route::get('/infoberkala', [HomeController::class, 'infoberkala']);
Route::get('/infosetiapsaat', [HomeController::class, 'infosetiapsaat']);
Route::get('/infosertamerta', [HomeController::class, 'infosertamerta']);
Route::get('/alurlayanan', [HomeController::class, 'alurlayanan']);
Route::get('/alurkeberatan', [HomeController::class, 'alurkeberatan']);
Route::get('/maklumat', [HomeController::class, 'maklumat']);
Route::get('/regulasi', [HomeController::class, 'regulasi']);
Route::get('/sop', [HomeController::class, 'sop']);
Route::get('/jadwal', [HomeController::class, 'jadwal']);
Route::get('/fasilitas', [HomeController::class, 'fasilitas']);
Route::get('/biaya', [HomeController::class, 'biaya']);
Route::get('/panduan', [HomeController::class, 'panduan']);
Route::get('/alurpengajuan', [HomeController::class, 'alurpengajuan']);
Route::get('/tatacara', [HomeController::class, 'tatacara']);
Route::get('/mediacetak', [HomeController::class, 'mediacetak']);
Route::get('/mediaonline', [HomeController::class, 'mediaonline']);
Route::get('/dokumen', [HomeController::class, 'dokumen']);
