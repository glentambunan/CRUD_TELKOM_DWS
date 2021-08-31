<?php

namespace Database\Factories;

use App\Models\A2p;
use Illuminate\Database\Eloquent\Factories\Factory;

class A2pFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = A2p::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'source' => $this->faker->name(),
            'asal'=> $this->faker->name(),
            'SMSC'=> $this->faker->name(),
            'link'=> $this->faker->name(),
            'operator'=> $this->faker->name(),
            'sender'=> $this->faker->name(),
            'terminasi'=> $this->faker->name(),
            'tipe_terminasi'=> $this->faker->name(),
            'SID'=> $this->faker->name(),
            'status_terminasi'=> $this->faker->name(),
        ];
    }
}
