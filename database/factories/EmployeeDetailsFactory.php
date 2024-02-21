<?php

namespace Database\Factories;

use App\Models\employeeDetail;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeDetailsFactory extends Factory
{
    protected $model = employeeDetail::class;

    public function definition(): array
    {
    	return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,

    	];
    }
}
