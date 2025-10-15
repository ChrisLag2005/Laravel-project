<?php

namespace Tests\Feature;

use App\Models\Alumno;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AlumnoControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function muestra_listado_de_alumnos()
    {
        $alumno = Alumno::factory()->create();

        $this->get(route('alumno.index'))
            ->assertSeeInOrder(['Código', 'Nombre', 'Correo', 'Acciones'])
            ->assertSee($alumno->nombre)
            ->assertStatus(200);
    }

    /** @test */
    public function muestra_formulario_de_creacion_de_alumno()
    {
        $this->get(route('alumno.create'))
            ->assertSeeInOrder(['Código', 'Nombre', 'Correo', 'Guardar'])
            ->assertStatus(200);
    }

    /** @test */
    public function crea_un_alumno()
    {
        $alumno = Alumno::factory()->make();

        $this->post(route('alumno.store'), $alumno->toArray())
            ->assertRedirect(route('alumno.index'));

        $this->assertDatabaseHas('alumnos', [
            'codigo' => $alumno->codigo,
            'nombre' => $alumno->nombre,
            'correo' => $alumno->correo,
        ]);

        $this->get(route('alumno.index'))
            ->assertSee($alumno->nombre);
    }

    /** @test */
    public function verifica_errores_al_crear_alumno()
    {
        $alumno = Alumno::factory()->make([
            'codigo' => '',
            'correo' => 'correo_invalido',
        ]);

        $this->post(route('alumno.store'), $alumno->toArray())
            ->assertSessionHasErrors(['codigo', 'correo']);

        $this->assertDatabaseMissing('alumnos', [
            'codigo' => $alumno->codigo,
            'correo' => $alumno->correo,
        ]);
    }
}

