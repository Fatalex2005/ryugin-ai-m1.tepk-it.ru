@extends('layouts.layout')

@section('title', 'Редактирование материала')

@section('content')
    <a class="btn" href="{{ route('materials.index') }}"> <- НАЗАД</a>
    <h2 class="h2">Редактирование материала</h2>
    <form action="{{ route('materials.update', $material->id) }}" method="post" enctype="application/x-www-form-urlencoded">
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
                    @foreach($types as $type)
                        <option value="{{ $type->id }}" @if($type->id === $material->materialType->id) selected @endif> {{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('material_type_id')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <div class="just">
                <label for="name">Название материала: </label>
                <input type="text" id="name" name="name" value="{{$material->name}}" placeholder="Введите название материала" required>
            </div>
            @error('name')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <div class="just">
                <label for="price">Цена: </label>
                <input type="number" min="0" step="0.01" id="price" value="{{$material->price}}" name="price" placeholder="Введите цену" required>
            </div>
            @error('price')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <div class="just">
                <label for="warehouse">Количество на складе: </label>
                <input type="number" min="0" step="0.01" id="warehouse" value="{{$material->warehouse}}" name="warehouse" placeholder="Введите количество на складе" required>
            </div>
            @error('warehouse')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <div class="just">
                <label for="minimum">Минимальное количество: </label>
                <input type="number" min="0" step="0.01" id="minimum" name="minimum" value="{{$material->minimum}}" placeholder="Введите минимальное количество" required>
            </div>
            @error('minimum')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <div class="just">
                <label for="packaging">Количество в упаковке: </label>
                <input type="number" min="0" step="0.01" id="packaging" name="packaging" value="{{$material->packaging}}" placeholder="Введите количество в упаковке" required>
            </div>
            @error('packaging')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div>
            <div class="just">
                <label>Единица измерения: </label>
                <select name="unit_id" required>
                    @foreach($units as $unit)
                        <option value="{{ $unit->id }}" @if($unit->id === $material->unit->id) selected @endif> {{ $unit->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('unit_id')
            <p class="warning"> {{ $message }}</p>
            @enderror
        </div>
        <div class="edit-and-create">
            <button class="btn" type="submit">Отредактировать материал</button>
        </div>
    </form>
@endsection
