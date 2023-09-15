<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/',[\App\Http\Controllers\SesiController::class, 'index']);

Route::controller(\App\Http\Controllers\SesiController::class)->group(function (){
    Route::get('/', 'index')->middleware(['guest']);
    Route::post('/', 'login')->name('login')->middleware(['guest']);
    Route::get('/logout','logout')->name('logout');
});


Route::controller(\App\Http\Controllers\HomeController::class)->group(function (){
    Route::get('/home', 'index')->name('home');

    Route::get('/{id}/program', 'indexProgram')->name('program');


    Route::get('/{program}/kegiatan', 'indexKegiatan')->name('kegiatan');

    Route::get('/{program}/kegiatan/addkegiatan', 'addKegiatan')->name('addkegiatan');

    Route::post("users", "getUser")->name('getUser');
})->middleware(['auth']);

Route::controller(\App\Http\Controllers\ProgramController::class)->group(function () {
    Route::get('/{kpis}/program/addprogram', 'create')->name('addprogram');
    Route::post("programs", "store");

})->middleware(['auth']);

Route::controller(\App\Http\Controllers\NavbarController::class)->group(function (){
    Route::get('/kpiscapaian/{circle}', 'indexCapaian')->name('capaian');
    Route::get('/kpistarget/{circle}', 'indexTarget')->name('target');

})->middleware(['auth']);

