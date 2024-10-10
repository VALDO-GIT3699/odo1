<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cita</title>
</head>
<body>
    <h1>Crear Cita</h1>

    <form action="{{ route('cita.store') }}" method="POST">
        @csrf
        <label for="fecha">Fecha:</label><br>
        <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}"><br>
        
        <label for="hora">Hora:</label><br>
        <input type="time" name="hora" id="hora" value="{{ old('hora') }}"><br>


        <label for="descripcion">Descripción:</label><br>
        <textarea name="descripcion" cols="30" rows="4">{{ old('descripcion') }}</textarea><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>