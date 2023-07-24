@extends('layout.layout')

@section('contenido')
    <h1>Tareas</h1>
    <ul>
        @foreach ($tareas as $tarea)
            <li>{{ $tarea['descripcion'] }}</li>
        @endforeach
    </ul>
@endsection
