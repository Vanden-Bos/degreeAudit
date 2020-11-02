<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Course extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $course = \App\Models\Course::create  (['user_id' => '01234', 'program_id' => '56789', 'title' => 'class_for_dum_dum_heads', 'term' => 'Spring2021', 'grade' => 'A', 'credits' => '5']);
        $this->assertDatabaseHas ('courses',   ['user_id' => '01234', 'program_id' => '56789', 'title' => 'class_for_dum_dum_heads', 'term' => 'Spring2021', 'grade' => 'A', 'credits' => '5']);
    }
}
