<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Exception extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $exception = \App\Models\Exception::create  (['user_id' => '123456', 'rule_id' => '789101112']);
        $this->assertDatabaseHas ('exceptions',      ['user_id' => '123456', 'rule_id' => '789101112']);
    }
}
