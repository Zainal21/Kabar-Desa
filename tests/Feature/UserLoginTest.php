<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/auth/login');

        $response->assertStatus(200);
    }
    public function UserLogin()
    {
        $response = $this->get('/auth/login');

        $response->assertStatus(200);
    }
}
