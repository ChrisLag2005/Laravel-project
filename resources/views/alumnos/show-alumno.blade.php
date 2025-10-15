<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumno: {{ $alumno->nombre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="container py-4">
    <ul class="mb-3">
        <li>
            <a href="{{ route('alumno.index') }}" class="btn btn-secondary">Volver al listado de alumnos</a>
        </li>
    </ul>

    <h1 class="mb-3">Alumno: {{ $alumno->nombre }}</h1>

    <div class="card p-3">
        <p><strong>Código:</strong> {{ $alumno->codigo }}</p>
        <p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
        <p><strong>Correo:</strong> {{ $alumno->correo }}</p>
        <p><strong>Fecha de nacimiento:</strong> {{ $alumno->fecha_nacimiento }}</p>
        <p><strong>Sexo:</strong> {{ $alumno->sexo }}</p>
        <p><strong>Carrera:</strong> {{ $alumno->carrera }}</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
