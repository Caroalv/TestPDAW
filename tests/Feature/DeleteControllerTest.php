<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Task;

class DeleteControllerTest extends TestCase
{
    // Utiliza la funcionalidad de base de datos en memoria
    use RefreshDatabase;

    /** @test */
    public function it_can_delete_a_task()
    {
        // Crea una tarea en la base de datos para eliminar
        $task = Task::factory()->create();

        // Realiza una solicitud HTTP DELETE a la ruta de eliminación con el ID de la tarea
        $response = $this->delete(route('tasks.destroy', $task));

        // Asegúrate de que la solicitud sea redirigida a la ruta de tareas (tasks.index)
        $response->assertRedirect(route('tasks.index'));

        // Verifica que la tarea se haya eliminado correctamente de la base de datos
        $this->assertDatabaseMissing('tasks', [
            'id' => $task->id,
        ]);
    }

    // Ejecuta la prueba con el siguiente comando:
    // php artisan test --filter DeleteControllerTest

    // ...
}

