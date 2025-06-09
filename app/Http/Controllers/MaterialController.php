<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Models\Material;
use App\Models\MaterialProduct;
use App\Models\MaterialType;
use App\Models\Unit;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        // Получаем все материалы
        $materials = Material::all();
        // Подсчёт требуемого количества материала
        foreach ($materials as $material) {
            $sum = MaterialProduct::where('material_id', $material->id)->sum('quantity');
            $material->sum = $sum;
        }
        // Возврат страницы с материалами
        return view('materials.index', compact('materials', 'sum'));
    }

    public function create()
    {
        // Получаем все единицы измерения
        $units = Unit::all();
        // Получаем все типы материалов
        $types = MaterialType::all();
        // Возращаем представление с формой для создания материала
        return view('materials.create', compact('units', 'types'));
    }
    public function store(MaterialRequest $request)
    {
        // Создаем материал
        Material::create($request->validated());
        // Перенаправляем на представление со списком материалов
        return redirect()->route('materials.index')->with('success', 'Материал успешно добавлен');
    }
    public function show(Material $material)
    {
        // Загружаем продукты с информацией о количестве материала
        $products = $material->materialProducts()
            ->with('product')
            ->get();
        // Возвращаем представление с продукцией, используещей выбранный материал
        return view('materials.show', compact('material', 'products'));
    }
    public function edit(Material $material)
    {
        // Получаем все единицы измерения
        $units = Unit::all();
        // Получаем все типы материалов
        $types = MaterialType::all();
        // Возвращаем представление с формой для редактирования
        return view('materials.edit', compact('material', 'units', 'types'));
    }
    public function update(MaterialRequest $request, Material $material)
    {
        // Обновляем материал
        $material->update($request->validated());
        // Перенаправляем на представление со списком материалов
        return redirect()->route('materials.index')->with('success', 'Материал успешно обновлён');
    }

}
