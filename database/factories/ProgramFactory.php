<?php

namespace Database\Factories;

use App\Models\program;
use Illuminate\Database\Eloquent\Factories\Factory;

class programFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = program::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->id,
            'year' => $this->faker->name,
            'class code' => $this->faker->classCode,
            'friendly name'=> $this->faker->friendlyName,
            'major' => $this->faker->major,
        ];
    }
}
