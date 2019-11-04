<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAddMarguerita()
    {
        $response = $this->post('/api/addPizza', [
            'pizza_name' => 'MargueritaG',
            'size' => 'G',
            'flavour' => 'marguerita',
        ]);
        var_dump($response);
        $response->assertStatus(200);
        // $this->assertTrue(true);
    }

    public function testAddBacon()
    {
        $response = $this->post('/api/addPizza', [
            'pizza_name' => 'BaconXL',
            'size' => 'XL',
            'flavour' => 'bacon e milho',
        ]);
        var_dump($response);
        $response->assertStatus(200);
        // $this->assertTrue(true);
    }

    public function testAddPortuguesa()
    {
        $response = $this->post('/api/addPizza', [
            'pizza_name' => 'PortuguesaM',
            'size' => 'G',
            'flavour' => 'portuguesa',
        ]);
        var_dump($response);
        $response->assertStatus(200);
        // $this->assertTrue(true);
    }

    public function testEditPortuguesa()
    {
        $response = $this->post('/api/editPizza', [
            'id' => '4',
            'pizza_name' => 'ModaP',
            'size' => 'P',
            'flavour' => 'a moda',
        ]);
        var_dump($response);
        $response->assertStatus(200);
        // $this->assertTrue(true);
    }

    public function testDeleteModa()
    {
        $response = $this->post('/api/removePizza', [
            'id' => '4',
        ]);
        var_dump($response);
        $response->assertStatus(200);
        // $this->assertTrue(true);
    }

    public function testNewOrder()
    {
        $response = $this->post('/api/createOrder', [
            'phone' => 'Teste Phone',
            'address' => 'Meu Endereco',
            'total' => 'R$ 600,00',
            'pizza_id' => '8',
        ]);
        var_dump($response);
        $response->assertStatus(200);
        // $this->assertTrue(true);
    }
}
