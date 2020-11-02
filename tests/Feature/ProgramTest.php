<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Program extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testProgram()
    {
        $rule = \App\Models\Program::create  (['program_id' => '123456', 'friendly_name' => 'Computer_Science_Major']);
        $this->assertDatabaseHas ('programs', ['program_id' => '123456', 'friendly_name' => 'Computer_Science_Major']);
    }
}
