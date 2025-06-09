@extends('layouts.layout')

@section('title', 'Продукция, использующая материал')

@section('content')

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{ route('materials.index') }}" class="btn btn-secondary"> <- НАЗАД</a>
        </div>
        <h2 class="h2">Продукция, использующая "{{ $material->name }}"</h2>
        @if ($products->isEmpty()) <!-- Вывод параграфа, если массив продукции для выбранного материала будет пустой -->
            <p class="alert alert-warning">Этот материал нигде не используется.</p>
        @else
            <table class="table">
                <thead class="border-bottom">
                <tr class="space">
                    <th>Наименование продукции</th>
                    <th>Необходимое количество материала</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $mp) <!-- Для вывода продукции, если в массиве есть хоть один объект -->
                    <tr class="space">
                        <td>{{ $mp->product->name }}</td>
                        <td>{{ $mp->quantity }} {{ $material->unit->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection
