<?php

namespace Database\Factories;

use App\Models\employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class EmployeeFactory extends Factory
{
    protected $model = employee::class;

    public function definition(): array
    {
    	return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'password' => Hash::make($this->faker->password),
            'original_pass'=>$this->faker->password,
    	];
    }
}
