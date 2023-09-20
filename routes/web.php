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

    Route::post("users", "getUser")->name('getUser');
})->middleware(['auth']);

Route::controller(\App\Http\Controllers\NavbarController::class)->group(function (){
    Route::get('/kpiscapaian/{circle}', 'indexCapaian')->name('capaian');
    Route::get('/kpistarget/{circle}', 'indexTarget')->name('target');
})->middleware(['auth']);

Route::controller(\App\Http\Controllers\ProgramController::class)->group(function () {
    Route::get('/{kpis}/program/addprogram', 'create')->name('addprogram');
    Route::post('/{kpis}/program/addprogram', "store")->name('storeprogram');

    Route::get('/{id}/program/edit', 'editProgram')->name('editprogram');
    Route::post('/{id}/program/edit', 'storeEdit')->name('storeEdit');

    Route::delete('/{id}/program/delete/{key}', 'delete')->name('deleteprogram');


})->middleware(['auth']);

Route::controller(\App\Http\Controllers\KegiatanController::class)->group(function () {
    Route::get('/{id}/kegiatan/addkegiatan', 'create')->name('addkegiatan');
    Route::post('/{id}/kegiatan/addkegiatan', 'store')->name('storekegiatan');

    Route::get('/home/update/{id}', 'show')->name('updateCapaian');
    Route::post('/home/update/{id}', 'storeCapaian')->name('updateCp');

    Route::get('/{id}/kegiatan/edit', 'editKegiatan')->name('editKegiatan');
    Route::post('/{id}/kegiatan/edit', 'storeEditK')->name('storeEditK');



})->middleware(['auth']);

