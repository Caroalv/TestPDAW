<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;
use App\Models\Task;

class UpdateControllerTest extends TestCase
{
    //use RefreshDatabase; // Esto reiniciará la base de datos después de cada prueba.

    /** @test */
    public function it_updates_data_in_database()
    {
        // Crea un registro en la base de datos para actualizar
        $task = Task::create([
            'titulo' => 'Título original',
            'descripcion' => 'Descripción original',
            'estado' => '1',
        ]);

        // Datos actualizados
        $updatedData = [
            'titulo' => 'Nuevo título',
            'descripcion' => 'Nueva descripción',
            'estado' => '2',
        ];

        // Simula una solicitud POST a la ruta de actualización del controlador
        $response = $this->put(route('tasks.update', ['id' => $task->id]), $updatedData);

        // Verifica que la respuesta redireccione a la ruta correcta
        $response->assertRedirect(route('tasks.index'));

        // Verifica que los datos se hayan actualizado en la base de datos
        $this->assertDatabaseHas('tasks', $updatedData);

        // Verifica que los datos antiguos no existan en la base de datos
        $this->assertDatabaseMissing('tasks', [
            'titulo' => 'Título original',
            'descripcion' => 'Descripción original',
            'estado' => 'Pendiente',
        ]);
    }
}
