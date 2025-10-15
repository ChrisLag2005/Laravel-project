<x-mi-layout>
    <h1 class="mb-4">Registrar nuevo alumno</h1>

    <x-form-error />

    <form action="{{ route('alumno.store') }}" method="POST" class="row g-3">
        @csrf

        <div class="col-md-6">
            <label for="codigo" class="form-label">Código:</label>
            <input type="text" id="codigo" name="codigo" class="form-control" value="{{ old('codigo') }}">
            @error('codigo')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}">
            @error('nombre')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="correo" class="form-label">Correo:</label>
            <input type="email" id="correo" name="correo" class="form-control" value="{{ old('correo') }}">
            @error('correo')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento') }}">
            @error('fecha_nacimiento')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="sexo" class="form-label">Sexo:</label>
            <select id="sexo" name="sexo" class="form-select">
                <option value="">Selecciona...</option>
                <option value="M" {{ old('sexo') == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ old('sexo') == 'F' ? 'selected' : '' }}>Femenino</option>
            </select>
            @error('sexo')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="carrera" class="form-label">Carrera:</label>
            <input type="text" id="carrera" name="carrera" class="form-control" value="{{ old('carrera') }}">
            @error('carrera')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</x-mi-layout>
