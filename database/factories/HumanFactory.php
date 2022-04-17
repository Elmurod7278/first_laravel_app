<?php

namespace Database\Factories;

use App\Models\Human;
use Illuminate\Database\Eloquent\Factories\Factory;

class HumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Human::class;
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'address'=>$this->faker->address,
            'phone'=>$this->faker->e164PhoneNumber
        ];
    }
}
