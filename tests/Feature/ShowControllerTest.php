<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_tasks_index_route()
    {
        // Simula una solicitud HTTP GET a la ruta /tasks
        $response = $this->get('/tasks');

        // Verifica que el código de estado de la respuesta sea 200 (OK)
        $response->assertStatus(200);

        // Verifica que la vista utilizada en la respuesta sea 'tasks.index'
        $response->assertViewIs('tasks.index');
    }

    public function test_graficas_route()
    {
        // Simula una solicitud HTTP GET a la ruta /graficas
        $response = $this->get('/graficas');

        // Verifica que el código de estado de la respuesta sea 200 (OK)
        $response->assertStatus(200);

        // Verifica que la vista utilizada en la respuesta sea 'graficas'
        $response->assertViewIs('graficas');

        //Para ejecutar el test utilizamos el siguiente comando:
        //php artisan test --filter ShowControllerTest
    }
}

