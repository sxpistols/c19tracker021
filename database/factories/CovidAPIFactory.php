<?php

namespace Database\Factories;

use App\Models\CovidAPI;
use Illuminate\Database\Eloquent\Factories\Factory;

class CovidAPIFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CovidAPI::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country' => $this->faker->word,
        'code' => $this->faker->word,
        'confirm' => $this->faker->word,
        'recovered' => $this->faker->word,
        'critical' => $this->faker->word,
        'death' => $this->faker->word,
        'latitude' => $this->faker->word,
        'longitude' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
