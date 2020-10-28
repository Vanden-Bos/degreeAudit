<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testExample2() 
    {
        // https://laravel.com/docs/8.x/database-testing
        $user = User::factory()->create(['email' => 'sally@example.com']);
        $this->assertDatabaseHas('users', ['email' => 'sally@example.com',]);
        
    }
}
