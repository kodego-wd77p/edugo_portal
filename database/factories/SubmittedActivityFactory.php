<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class SubmittedActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            // 'students_id' => Students::all(),
            'first_name' => Str::random(5),
            'last_name' => Str::random(4),
            'subjects' => Str::random('Math', 'Occ', 'Pe', 'Science'),
            'acti_type' => Str::random(3). " ". Str::random(4),
            'activity' => Str::random(5, 9),
            'date_submitted' => Carbon::today()->subDays(rand(0, 365)),

            //
        ];
    }
}
