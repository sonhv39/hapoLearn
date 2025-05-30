<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiTest extends TestCase
{
    public function testApiReturns200()
    {
        $response = $this->get('/api/health-check');
        $response->assertStatus(200);
    }

    public function testApiReturnsJson()
    {
        $response = $this->get('/api/health-check');
        $response->assertHeader('Content-Type', 'application/json');
    }

    public function testApiReturns404ForInvalidEndpoint()
    {
        $response = $this->get('/api/invalid-endpoint');
        $response->assertStatus(404);
    }
} 