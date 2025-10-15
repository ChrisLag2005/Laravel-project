<?php

namespace Tests\Feature;

use App\Models\Tarea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TareaControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function muestra_listado_de_tareas()
    {
        $tarea = Tarea::factory()->create();

        $this->get(route('tarea.index'))
            ->assertSeeInOrder(['Título', 'Acciones'])
            ->assertSee($tarea->titulo)
            ->assertStatus(200);
    }

    /** @test */
    public function muestra_formulario_de_creacion_de_tarea()
    {
        $this->get(route('tarea.create'))
            ->assertSeeInOrder(['Título', 'Descripción', 'Guardar'])
            ->assertStatus(200);
    }

    /** @test */
    public function crea_una_tarea()
    {
        $tarea = Tarea::factory()->make();

        $this->post(route('tarea.store'), $tarea->toArray())
            ->assertRedirect(route('tarea.index'));

        $this->assertDatabaseHas('tareas', [
            'titulo' => $tarea->titulo,
            'descripcion' => $tarea->descripcion,
        ]);

        $this->get(route('tarea.index'))
            ->assertSee($tarea->titulo);
    }

    /** @test */
    public function verifica_errores_al_crear_tarea()
    {
        $tarea = Tarea::factory()->make([
            'titulo' => '',
            'descripcion' => 'Corta',
        ]);

        $this->post(route('tarea.store'), $tarea->toArray())
            ->assertSessionHasErrors(['titulo', 'descripcion']);

        $this->assertDatabaseMissing('tareas', [
            'titulo' => $tarea->titulo,
            'descripcion' => $tarea->descripcion,
        ]);
    }
}
