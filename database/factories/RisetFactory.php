<?php

namespace Database\Factories;

use App\Models\Riset;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RisetFactory extends Factory
{
    protected $model = Riset::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'judul' => $this->faker->sentence,
            'tahun' => $this->faker->year,
            'no_telepon' => $this->faker->phoneNumber,
            'abstrak' => $this->faker->paragraph,
            'upload_file' => $this->faker->word . '.pdf',
            'is_publish' => $this->faker->randomElement(['Y', 'N']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
