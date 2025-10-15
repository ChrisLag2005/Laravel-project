<x-mi-layout>
    <x-encabezado>
        Listado de Alumnos
    </x-encabezado>

    <div class="mb-3">
        <a href="{{ route('alumno.create') }}" class="btn btn-primary">Registrar nuevo alumno</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Fecha de nacimiento</th>
                            <th>Sexo</th>
                            <th>Carrera</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($alumnos as $alumno)
                            <tr>
                                <td>{{ $alumno->id }}</td>
                                <td>{{ $alumno->codigo }}</td>
                                <td>
                                    <a href="{{ route('alumno.show', $alumno->id) }}">
                                        {{ $alumno->nombre }}
                                    </a>
                                </td>
                                <td>{{ $alumno->correo }}</td>
                                <td>{{ $alumno->fecha_nacimiento }}</td>
                                <td>{{ $alumno->sexo }}</td>
                                <td>{{ $alumno->carrera }}</td>
                                <td class="d-flex gap-2">
                                    <a class="btn btn-warning btn-sm" href="{{ route('alumno.edit', $alumno->id) }}">Editar</a>
                                    <form action="{{ route('alumno.destroy', $alumno->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No hay alumnos registrados.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-mi-layout>
