<x-mi-layout>
    <div class="mb-3">
        <a href="{{ route('alumno.index') }}" class="btn btn-secondary">Volver al listado de alumnos</a>
    </div>

    <h1 class="mb-3">Alumno: {{ $alumno->nombre }}</h1>

    <div class="card shadow p-3">
        <p><strong>Código:</strong> {{ $alumno->codigo }}</p>
        <p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
        <p><strong>Correo:</strong> {{ $alumno->correo }}</p>
        <p><strong>Fecha de nacimiento:</strong> {{ $alumno->fecha_nacimiento }}</p>
        <p><strong>Sexo:</strong> {{ $alumno->sexo }}</p>
        <p><strong>Carrera:</strong> {{ $alumno->carrera }}</p>
    </div>
</x-mi-layout>
