<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ExampleTest extends TestCase
{
   
    use WithoutMiddleware;
    use DatabaseTransactions;
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
     public function test_delete()
     {
         $response = $this->delete('/api/productos/5');
         $this->withoutMiddleware();
         $response
             ->assertStatus(200)
             ->assertJson([
                 'mensaje' => 'productos Eliminado exitosamente',
             ]);
     }
     public function test_update()
    {
         $response = $this->put('/api/productos/4', ['nombre' => 'acuaman','tipo' => 'tulita']);
         $this->withoutMiddleware();
         $response
            ->assertStatus(200)
             ->assertJson([
                 'mensaje' => 'productos actualizado exitosamente',
             ]);
     }

     public function test_guardar()
     {
      
        $this->withoutMiddleware();
         $response = $this->post('/api/productos', ['nombre' => 'PHONE9','tipo' => 'Celular']);

         $response
             ->assertStatus(200)
             ->assertJson([
                 'mensaje' => 'Productos guardado exitosamente',
             ]);
     }

    public function test_index()
    {
        $response = $this->get('/api/productos');
        $this->withoutMiddleware();
        $response
            ->assertStatus(200)
            ->assertJson([
                
            ]);
    }


}
