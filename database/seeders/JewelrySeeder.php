<?php

namespace Database\Seeders;

use App\Models\Jewelry;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JewelrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jewelry::factory(10)->create();
    }
}
