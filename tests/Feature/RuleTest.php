<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Rule extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRule()
    {
        $rule = \App\Models\Rule::create  (['program_id' => '123456', 'rule' => '(CSC130 & CSC131) || CSC 143', 'friendly_name' => 'CSC intro classes']);
        $this->assertDatabaseHas ('rules', ['program_id' => '123456', 'rule' => '(CSC130 & CSC131) || CSC 143', 'friendly_name' => 'CSC intro classes']);
    }
}
