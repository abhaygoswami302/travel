<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Order Food',
                'Transport Services',
                'Entertainment',
                'Clean Up Services',
                'Laundry Services',
                'Luggage Services',
                'Visa Services',
                'Medical Services',
                'Other Services',
            ]),
            'description' => $this->faker->paragraph(200),
            'image' => $this->faker->randomElement([
                '/images/service1.jpg',
                '/images/service2.jpg',
                '/images/service3.jpg',
                '/images/service10.jpg',
            ]),
        ];
    }
}
