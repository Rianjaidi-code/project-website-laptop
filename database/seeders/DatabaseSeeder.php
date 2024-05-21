<?php

namespace Database\Seeders;

use App\Models\ModelLaptop;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Rian Admin',
            'email' => 'rianjaidi@fic16.com',
            'password' => Hash::make('12345678'),
        ]);

        ModelLaptop::create([
            'category_model' => 'Laptop'
        ]);

        ModelLaptop::create([
            'category_model' => 'Notebook'
        ]);

        $this->call([
            LaptopDataSeeder::class
        ]);
    }
}
