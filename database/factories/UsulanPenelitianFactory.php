<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UsulanPenelitian;

class UsulanPenelitianFactory extends Factory
{
    protected $model = UsulanPenelitian::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'judul_penelitian' => $this->faker->sentence,
            'tahun' => $this->faker->year,
            'no_telepon' => $this->faker->phoneNumber,
            'abstrak' => $this->faker->paragraph,
            'identifikasi_masalah' => $this->faker->paragraph,
            'tujuan' => $this->faker->paragraph,
            'file' => $this->faker->word . '.pdf',
            'status' => $this->faker->randomElement(['Sedang Diproses', 'Selesai']),
            'is_publish' => $this->faker->randomElement(['Y', 'N']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
