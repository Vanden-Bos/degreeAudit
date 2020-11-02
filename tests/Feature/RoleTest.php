<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Role extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRole()
    {
        $rule = \App\Models\Role::create  (['user_id' => '123456', 'role' => 'admin']);
        $this->assertDatabaseHas ('roles', ['user_id' => '123456', 'role' => 'admin']);
    }
}
