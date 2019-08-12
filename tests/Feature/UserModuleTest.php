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
        ->assertSee('Joseph Bayer Jr.');
    }
    /**
     * @test
     */
    function show()
    {
        $this->get('/users/5')
        ->assertStatus(200)
        ->assertSee('Reba Wiegand');
    }
     

}
