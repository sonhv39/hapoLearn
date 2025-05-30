<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiTest extends TestCase
{
    public function test_api_returns_200()
    {
        $response = $this->get('/api/health-check');
        $response->assertStatus(200);
    }

    public function test_api_returns_json()
    {
        $response = $this->get('/api/health-check');
        $response->assertHeader('Content-Type', 'application/json');
    }

    public function test_api_returns_404_for_invalid_endpoint()
    {
        $response = $this->get('/api/invalid-endpoint');
        $response->assertStatus(404);
    }
} 