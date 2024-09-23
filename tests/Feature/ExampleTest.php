<?php

namespace Tests\Feature;

use Tests\TestCase;

class ClientTest extends TestCase
{
    public function test_client_index()
    {
        $response = $this->get('/clientes');
        $response->assertStatus(200);
    }

    public function test_create_client()
    {
        $response = $this->post('/clientes', [
            'nombre' => 'Test Cliente',
            'email' => 'test@mail.com',
            'telefono' => '123456789',
            'empresa' => 'Test Empresa',
            'sector' => 'Tecnología',
            'estado' => 'activo',
        ]);

        $response->assertRedirect('/clientes');
    }
}
//Creando pruebas para validar las rutas y el CRUD