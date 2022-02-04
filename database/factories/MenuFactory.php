<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    protected $model = Menu::class;

    public function definition(): array
    {
    	return [
    	    'idkategori' => $this->faker->numberBetween(1, 100),
            'menu' => $this->faker->name,
            'gambar' => $this->faker->imageUrl(640, 480),
            'harga' => $this->faker->numberBetween(3000, 50000)
    	];
    }
}
