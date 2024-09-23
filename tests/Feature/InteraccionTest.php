<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


public function test_create_interaction()
{
    $cliente = Cliente::factory()->create();

    $response = $this->post('/interacciones', [
        'id_cliente' => $cliente->id,
        'fecha_interaccion' => '2024-09-20',
        'tipo' => 'llamada',
        'resultado' => 'Positivo',
    ]);

    $response->assertStatus(302); // Redirige tras crear la interacción
    $this->assertDatabaseHas('interacciones', ['resultado' => 'Positivo']);
}

//Prueba para crear una interacción: