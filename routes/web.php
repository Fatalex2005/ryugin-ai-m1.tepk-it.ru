<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;

// Главная страница
Route::get('/', function () {
    return view('welcome');
});

Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');  // Переход на представление просмотра всех материалов

Route::get('/materials/create', [MaterialController::class, 'create'])->name('materials.create');  // Переход на представление создания материала
Route::post('/materials/create', [MaterialController::class, 'store'])->name('materials.store');  // Создание материала

Route::get('/materials/edit/{material}', [MaterialController::class, 'edit'])->name('materials.edit');  // Переход на представление редактирования материала
Route::post('/materials/edit/{material}', [MaterialController::class, 'update'])->name('materials.update');  // Редактирование материала

Route::get('/materials/{material}', [MaterialController::class, 'show'])->name('materials.show');  // Переход на представление просмотра материала (вывод списка продукции)
