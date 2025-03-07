<!DOCTYPE html>
<html>
<head>
    <title>Registrar Alumno</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { padding: 5px; width: 200px; }
        button { padding: 10px 20px; background-color: #28a745; color: white; border: none; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Registrar Nuevo Alumno</h1>
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
            @error('nombre')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo" value="{{ old('correo') }}" required>
            @error('correo')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required>
            @error('fecha_nacimiento')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" id="ciudad" value="{{ old('ciudad') }}" required>
            @error('ciudad')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('alumnos.index') }}">Ver lista de alumnos</a>
</body>
</html>