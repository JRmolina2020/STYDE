<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * @test
     */
     function index()
    {
        $this->get('/users/')
        ->assertStatus(200)
        ->assertSee('usuarios');
    }
     /**
     * @test
     */
     function show()
    {
        $this->get('/users/1')
        ->assertStatus(200)
        ->assertSee('hola tu id es 1');
    }

     /**
     * @test
     */
     function show2()
    {
        $this->get('/users/jose/machorro')
        ->assertStatus(200)
        ->assertSee('hola jose tu apodo es machorro');
    }


}
