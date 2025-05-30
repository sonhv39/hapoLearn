<?php

namespace Tests\Feature;

use Tests\TestCase;

class BasicPagesTest extends TestCase
{
    public function testHomePageLoads()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testLoginPageLoads()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function testRegisterPageLoads()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
} 