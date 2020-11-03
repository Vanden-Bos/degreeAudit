<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class User extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = \App\Models\User::create(['first_name' => 'John', 'last_name' => 'Doe', 'email' => 'johndoe@example.com', 'email_verified_at' => now(), 'password' => 'password']);
        $this->assertDatabaseHas('users', ['first_name' => 'John', 'last_name' => 'Doe', 'email' => 'johndoe@example.com', 'email_verified_at' => now(), 'password' => 'password']);
    }
}
