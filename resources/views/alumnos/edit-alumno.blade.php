<x-mi-layout>
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
            @error('codigo')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
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
            @error('nombre')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
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
            @error('correo')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
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
            @error('fecha_nacimiento')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sexo" class="form-label">Sexo:</label>
            <select id="sexo" name="sexo" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="M" {{ (old('sexo') ?? $alumno->sexo) == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ (old('sexo') ?? $alumno->sexo) == 'F' ? 'selected' : '' }}>Femenino</option>
            </select>
            @error('sexo')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
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
            @error('carrera')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Guardar cambios</button>
        <a href="{{ route('alumno.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</x-mi-layout>
