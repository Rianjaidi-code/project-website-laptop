<?php

namespace Database\Seeders;

use App\Models\LaptopData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaptopDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        LaptopData::factory(10)->create();
    }
}
