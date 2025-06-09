@extends('layouts.layout')

@section('title', 'Просмотр всех материалов')

@section('content')
    <h2 class="h2">Просмотр всех материалов</h2>
    <div class="justify-content-center">
        <a class="btn" href="{{route('materials.create')}}">Создать материал</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="cards">
        @foreach($materials as $material) <!-- Для вывода всех материалов и информации о них -->
            <div class="card2">
                <div class="d-flex card">
                    <div class="div85">
                        <div class="bigSize ">{{$material->materialType->name}} | {{$material->name}}</div>
                        <div>{{$material->minimum}}</div>
                        <div>{{$material->warehouse}}</div>
                        <div>Цена: {{$material->price}} р/{{$material->unit->name}} | {{$material->packaging}}</div>
                    </div>
                    <div class="bigSize div15">
                        {{$material->sum}}
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn" href="{{ route('materials.edit', $material->id) }}"><-Редактировать-></a>
                    <a class="btn" href="{{ route('materials.show', $material->id) }}"><-Просмотр-></a>
                </div>
            </div>

        @endforeach

    </div>


@endsection
