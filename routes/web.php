<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DataController;

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

Route::get('/ukuran', [UkuranController::class, 'showForm'])->name('ukuran.form');
Route::post('/ukuran/save', [UkuranController::class, 'saveOption'])->name('ukuran.save');

Route::get('/siswa', [SiswaController::class, 'showForm'])->name('siswa.form');

Route::get('/data', [DataController::class, 'showForm'])->name('data.form');