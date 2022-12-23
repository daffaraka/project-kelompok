<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penitipan>
 */
class PenitipanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_pemilik' => fake()->name(),
            'alamat_pemilik' => fake()->address(),
            'no_hp' => fake()->phoneNumber(),
            'nama_hewan'=> fake()->name(),
            'jenis_kelamin' => 'Jantan',
            'tanggal_penitipan' => now(),
            'tanggal_kembali' => now(),
        ];
    }
}
