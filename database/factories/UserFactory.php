<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'), // Default hashed password
            'nama_lengkap' => $this->faker->name,
            'nik' => $this->faker->numerify('##########'),
            'no_telepon' => $this->faker->phoneNumber,
            'role' => $this->faker->randomElement(['Admin', 'Pemerintah Daerah', 'Masyarakat']),
            'alamat' => $this->faker->address,
            'gambar' => $this->faker->imageUrl(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
