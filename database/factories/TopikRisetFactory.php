<?php

namespace Database\Factories;

use App\Models\TopikRiset;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopikRisetFactory extends Factory
{
    protected $model = TopikRiset::class;

    public function definition()
    {
        return [
            'isu_permasalahan' => $this->faker->sentence,
            'permasalahan' => $this->faker->sentence,
            'pertanyaan_riset' => $this->faker->sentence,
            'keterangan' => $this->faker->paragraph,
            'no_dokumen' => $this->faker->unique()->numerify('DOC###'),
            'judul' => $this->faker->sentence,
            'nama' => $this->faker->name,
            'file' => 'test.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
