<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarea módulo 2</title>
</head>

<body>
    <a href="{{ route('tareas.index') }}">Tareas</a>
    <a href="{{ route('tareas.create') }}">Agregar tarea</a>
    @yield('contenido')

</body>

</html>
