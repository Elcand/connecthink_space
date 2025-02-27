<?php

namespace Database\Seeders;

use App\Models\Studio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studios = [
            [
                'name_labs' => 'NineDragonLabs',
                'description' => 'NineDragonLabs is a cutting-edge studio specializing in innovative virtual reality and augmented reality applications.',
                'image' => 'https://example.com/images/9dragonlabs.jpg',
            ],
            [
                'name_labs' => 'NaTech',
                'description' => 'NaTech is a cutting-edge studio specializing in virtual reality and augmented reality applications',
                'image' => 'https://example.com/images/natech.jpg',
            ],
        ];

        foreach ($studios as $studio) {
            Studio::create($studio);
        }
    }
}
