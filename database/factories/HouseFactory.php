<?php

namespace Database\Factories;
use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = House::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->numberBetween(100000, 1000000),
            'company' => $this->faker->company,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'beds' => $this->faker->numberBetween(1, 5),
            'baths' => $this->faker->numberBetween(1, 3),
            'square_meters' => $this->faker->numberBetween(100, 500),
            'cover' => $this->faker->randomElement([
                'uploads/property-1.jpg',
                'uploads/property-2.jpg',
                'uploads/property-3.jpg',
                'uploads/property-4.jpg',
                'uploads/property-5.jpg',
                'uploads/property-6.jpg',
                'uploads/property-7.jpg',
                'uploads/property-8.jpg',
            ]),
        ];
    }
}
