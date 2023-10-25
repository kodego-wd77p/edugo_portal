<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\QueryException;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
                'first_name' => Str::random(6),
                'last_name' => Str::random(6),
                'grade_level' => '12',
                'age' => rand(16, 18)
        ];
    }
}
