<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citas</title>
</head>
<body>
    <h1>Citas</h1>

    <p>
        <a href="{{ route('cita.create') }}">Agregar Cita</a>
    </p>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citas as $cita)
            <tr>
                <td>{{ $cita->id }}</td>
                <td>
                    <a href="{{ route('cita.show', $cita) }}">
                        {{ $cita->descripcion }}
                    </a>
                </td>
                <td>{{ $cita->fecha }}</td>
                <td>{{ $cita->hora }}</td>
                <td>
                    <a href="{{ route('cita.edit', $cita) }}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>