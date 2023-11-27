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

Route::get('/', [HomeController::class, 'home']);
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
Route::get('/alurpelayanan', [HomeController::class, 'alurpelayanan']);
Route::get('/alurkeberatan', [HomeController::class, 'alurkeberatan']);