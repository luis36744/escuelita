<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h1>Lista de Alumnos</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Ciudad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->id }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->correo }}</td>
                        <td>{{ $alumno->fecha_nacimiento }}</td>
                        <td>{{ $alumno->ciudad }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Registrar nuevo alumno</a>
    </div>
</body>
</html>