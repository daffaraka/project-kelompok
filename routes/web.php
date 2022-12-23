<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenitipanController;
use App\Models\Penitipan;

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

Route::prefix('auth')->group(function () {
    Route::get('/login',[UserController::class, 'getLogin']);
});
Route::resource('/barang', BarangController::class);

Route::get('/penitipan',[PenitipanController::class,'index'])->name('penitipan');
Route::get('/penitipan/create',[PenitipanController::class,'create'])->name('penitipan.create');
Route::post('/penitipan/store',[PenitipanController::class,'store'])->name('penitipan.store');
Route::get('/penitipan/{id}/edit',[PenitipanController::class,'edit'])->name('penitipan.edit');
Route::post('/penitipan/{id}/update',[PenitipanController::class,'update'])->name('penitipan.update');
Route::get('/penitipan/{id}/delete',[PenitipanController::class,'delete'])->name('penitipan.delete');

