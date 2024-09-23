<?php
//probará la creación, actualización, y eliminación de clientes.
namespace Tests\Feature;

use App\Models\Cliente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClientTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_client()
    {
        $response = $this->post('/clientes', [
            'nombre' => 'Juan Perez',
            'email' => 'juanperez@gmail.com',
            'telefono' => '123456789',
            'empresa' => 'Empresa Ejemplo',
            'sector' => 'Tecnología',
            'estado' => 'activo',
        ]);

        $response->assertStatus(302); // Redirige tras crear el cliente
        $this->assertDatabaseHas('clientes', ['email' => 'juanperez@gmail.com']);
    }
}
