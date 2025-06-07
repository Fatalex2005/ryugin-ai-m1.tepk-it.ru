<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
Route::get('/partners/create', [PartnerController::class, 'create'])->name('partners.create');
Route::post('/partners/create', [PartnerController::class, 'store'])->name('partners.store');
Route::get('/partners/edit/{id}', [PartnerController::class, 'edit'])->name('partners.edit');
Route::post('/partners/edit/{id}', [PartnerController::class, 'update'])->name('partners.update');
*/
