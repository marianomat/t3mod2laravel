@extends('layout.layout')

@section('contenido')
    <form action="{{ route('tareas.store') }}" method="POST">
        @csrf
        @method('POST')
        <label for="descripcion">
            Descripción Tarea
        </label>
        <input type="text" id="descripcion" name="descripcion">
        <button type="submit">Crear</button>
    </form>
@endsection
