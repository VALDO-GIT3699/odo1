<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Citas</title>
</head>
<body>
    <h1>{{ $cita->id }}</h1>
    <p>
        {{ $cita->descripcion }}
    </p>
    <p>
        <ul>
            <li>Fecha: {{ $cita->fecha }}</li>
            <li>Hora: {{ $cita->hora }}</li>
        </ul>
    </p>
    <hr>
    <a href="{{ route('cita.edit', $cita) }}">Editar</a>
    
    <form action="{{ route('cita.destroy', $cita) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>