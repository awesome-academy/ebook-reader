<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SaveListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->json('POST', '/lists', ['list_name' => 'List name']);
        $response->assertStatus(200)
            ->assertJson([
                'source' => 'library',
                'success' => true,
            ]);

        $response = $this->actingAs($user)->json('POST', '/lists', ['list_name' => '']);
        $response->assertStatus(422);
    }
}
