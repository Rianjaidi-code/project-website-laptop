<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaptopData>
 */
class LaptopDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => 11,
            'no_sample' => 'L13Y0001',
            'id_category' => 1,
            'model' => 'Lenovo 13w Yoga',
            'serial_number' => '4810R901',
            'screen_size' => '13 inch',
            'processor' => 'AMD Ryzen 7 5825U With Radeon Graphics 2.00GHz',
            'storage_1' => 'SSD M2',
            'size_1' => '1Tb',
            'storage_2' => '',
            'size_2' => '',
            'ram' => 'On Board 16GB + 1 Slot Ram 8GB ~',
            'graphic_1' => 'AMD Radeon (TM) Graphics',
            'graphic_2' => '',
            'mac_address' => 'e0-0a-f6-62-5a-f6',
            'wlan_or_bt_module' => 'Realtek RTL8852BE Wifi 6',
            'modem' => 'Slot Cellular (No Module)',
            'colour' =>  'Black',
            'OS' => 'Windows 11',
            'install_os_date' => $this->faker->date(),
            'charger' =>  $this->faker->boolean(),
            'condition_notes' => 'Dalam dus tidak ada charger | Sudah di install ulang Win 11 dan Office 2021 | Kondisi Baterai terakhir 75%',
            'date_check' => $this->faker->date(),
            'location' => 'Griya Utami',
            'position' => 'Depan kamar',
            'expedision' => $this->faker->text(),
            'in_date' => $this->faker->date(),
            // 'out_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['in']),
            // 'additional_info' => $this->faker->text(),
        ];
    }
}
