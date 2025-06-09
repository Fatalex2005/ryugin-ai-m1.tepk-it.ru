@extends('layouts.layout')

@section('title', 'Создание материала')

@section('content')
    <a class="btn" href="{{ route('materials.index') }}"> <- НАЗАД</a>
<h2 class="h2">Создание материала</h2>
    <form action="{{ route('materials.store') }}" method="post" enctype="application/x-www-form-urlencoded">
        @csrf
        @if ($errors->any())
            <script>
                alert("Ошибка валидации!");
            </script>
        @endif
        <div>
            <div class="just">
                <label>Тип материала: </label>
                <select name="material_type_id" required>
                    @foreach($types as $type) <!-- Для вывода всех типов материалов в выпадающем списке -->
                        <option value="{{ $type->id }}"> {{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Для вывода ошибок валидации из реквеста -->
            @error('material_type_id')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <div class="just">
                <label for="name">Название материала: </label>
                <input type="text" id="name" name="name" placeholder="Введите название материала" required>
            </div>
            @error('name')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <div class="just">
                <label for="price">Цена: </label>
                <input type="number" min="0" step="0.01" id="price" name="price" placeholder="Введите цену" required>
            </div>
            @error('price')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <div class="just">
                <label for="warehouse">Количество на складе: </label>
                <input type="number" min="0" step="0.01" id="warehouse" name="warehouse" placeholder="Введите количество на складе" required>
            </div>
            @error('warehouse')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <div class="just">
                <label for="minimum">Минимальное количество: </label>
                <input type="number" min="0" step="0.01" id="minimum" name="minimum" placeholder="Введите минимальное количество" required>
            </div>
            @error('minimum')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <div class="just">
                <label for="packaging">Количество в упаковке: </label>
                <input type="number" min="0" step="0.01" id="packaging" name="packaging" placeholder="Введите количество в упаковке" required>
            </div>
            @error('packaging')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <div class="just">
                <label>Единица измерения: </label>
                <select name="unit_id" required>
                    @foreach($units as $unit) <!-- Для вывода всех единиц измерения -->
                        <option value="{{ $unit->id }}"> {{ $unit->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('unit_id')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div class="edit-and-create">
            <button class="btn" type="submit">Создать материал</button>
        </div>
    </form>
@endsection
