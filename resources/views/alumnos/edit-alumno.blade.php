<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumno: Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="container py-4">
    <x-encabezado>
        Editar Alumno: {{ $alumno->nombre }}
    </x-encabezado>

    <x-form-error />

    <form action="{{ route('alumno.update', $alumno->id) }}" method="POST" class="mt-3">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="codigo" class="form-label">Código:</label>
            <input 
                type="text" 
                id="codigo" 
                name="codigo" 
                class="form-control" 
                value="{{ old('codigo') ?? $alumno->codigo }}" 
                required>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input 
                type="text" 
                id="nombre" 
                name="nombre" 
                class="form-control" 
                value="{{ old('nombre') ?? $alumno->nombre }}" 
                required>
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo (único):</label>
            <input 
                type="email" 
                id="correo" 
                name="correo" 
                class="form-control" 
                value="{{ old('correo') ?? $alumno->correo }}" 
                required>
        </div>

        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
            <input 
                type="date" 
                id="fecha_nacimiento" 
                name="fecha_nacimiento" 
                class="form-control" 
                value="{{ old('fecha_nacimiento') ?? $alumno->fecha_nacimiento }}" 
                required>
        </div>

        <div class="mb-3">
            <label for="sexo" class="form-label">Sexo:</label>
            <select id="sexo" name="sexo" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="M" {{ (old('sexo') ?? $alumno->sexo) == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ (old('sexo') ?? $alumno->sexo) == 'F' ? 'selected' : '' }}>Femenino</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera:</label>
            <input 
                type="text" 
                id="carrera" 
                name="carrera" 
                class="form-control" 
                value="{{ old('carrera') ?? $alumno->carrera }}" 
                required>
        </div>

        <button type="submit" class="btn btn-success">Guardar cambios</button>
        <a href="{{ route('alumno.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
