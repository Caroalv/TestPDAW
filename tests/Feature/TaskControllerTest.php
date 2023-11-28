<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;
use App\Models\Task;

class TaskControllerTest extends TestCase
{
    //use RefreshDatabase; // Esto reiniciará la base de datos después de cada prueba.

    /** @test */
    public function it_stores_data_in_database()
    {
        // Simula una solicitud con datos de prueba
        $data = [
            'titulo' => 'Título de prueba',
            'descripcion' => 'Descripción de prueba',
            'estado' => 1,
        ];

        // Hace una solicitud POST a la ruta de almacenamiento de la tarea
        $response = $this->post(route('tasks.store'), $data);

        // Verifica que la respuesta redireccione a la ruta correcta
        $response->assertRedirect(route('tasks.index'));

        // Verifica que los datos se hayan almacenado en la base de datos
        $this->assertDatabaseHas('tasks', $data);
    }
}
