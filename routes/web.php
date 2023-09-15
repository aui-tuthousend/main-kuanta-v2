<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\SesiController::class)->group(function (){
    Route::get('/', 'index')->middleware(['guest']);
    Route::post('/', 'login')->name('login')->middleware(['guest']);
    Route::get('/logout','logout')->name('logout');
});

Route::controller(\App\Http\Controllers\HomeController::class)->group(function (){
    Route::get('/home', 'index')->name('home');
    Route::get('/{id}/program', 'indexProgram')->name('program');

    Route::get('/{id}/kegiatan', 'indexKegiatan')->name('kegiatan');
    Route::get('/{id}/kegiatan/addkegiatan', 'addKegiatan')->name('addkegiatan');
    Route::post("users", "getUser")->name('getUser');
})->middleware(['auth']);

Route::controller(\App\Http\Controllers\NavbarController::class)->group(function (){
    Route::get('/kpiscapaian/{circle}', 'indexCapaian')->name('capaian');
    Route::get('/kpistarget/{circle}', 'indexTarget')->name('target');
})->middleware(['auth']);

Route::controller(\App\Http\Controllers\ProgramController::class)->group(function () {
    Route::get('/{kpis}/program/addprogram', 'create')->name('addprogram');
    Route::post('/{kpis}/program/addprogram', "store")->name('storeprogram');

})->middleware(['auth']);

