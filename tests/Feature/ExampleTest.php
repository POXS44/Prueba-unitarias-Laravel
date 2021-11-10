<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    // public function test_delete()
    // {
    //     $response = $this->delete('/api/productos/2');

    //     $response
    //         ->assertStatus(200)
    //         ->assertJson([
    //             'mensaje' => 'productos Eliminado exitosamente',
    //         ]);
    // }
    // public function test_update()
    // {
    //     $response = $this->put('/api/productos/4', ['nombre' => 'acuaman','tipo' => 'tulita']);

    //     $response
    //         ->assertStatus(200)
    //         ->assertJson([
    //             'mensaje' => 'productos actualizado exitosamente',
    //         ]);
    // }

    public function test_guardar()
    {
        $response = $this->post('/api/productos', ['nombre' => 'PHONE9','tipo' => 'Celular']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Productos guardado exitosamente',
            ]);
    }
}
