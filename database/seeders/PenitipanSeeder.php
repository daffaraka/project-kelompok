<?php

namespace Database\Seeders;

use App\Models\Penitipan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class PenitipanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penitipan::factory(10)->create();
    }
}
