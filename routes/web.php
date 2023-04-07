<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\karyawanController;
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
    return view('login.login');
})->name('login');


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post ('/logout', [LoginController::class, 'logout']);






Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/dashboard', [karyawanController::class, 'spv']);
    Route::get('/kebersihan', function () {
        return view('admin.kebersihan');
    });
    Route::get('/karyawan', [karyawanController::class, 'show']);
    Route::get('/karyawan-tambah', [karyawanController::class, 'create']);
    Route::post('/karyawan', [karyawanController::class, 'store']);
    Route::get('/karyawan-edit/{id_karyawan}', [karyawanController::class, 'edit']);
    Route::put('/karyawan/{id_karyawan}', [karyawanController::class, 'update']);
    Route::delete('/karyawan/{id_karyawan}', [karyawanController::class, 'destroy']);
});



