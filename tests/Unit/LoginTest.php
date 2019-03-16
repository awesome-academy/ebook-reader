<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('POST', '/login', ['email' => 'admin', 'password' => '234567']);
        $response->assertStatus(422);

        $response = $this->json('POST', '/login', ['email' => 'admin', 'password' => '123456']);
        $response->assertStatus(302)
            ->assertRedirect('/home');
    }
}
