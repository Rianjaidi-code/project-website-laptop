<?php

namespace App\Imports;

use App\Models\LaptopData;
use DateTime;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Date;
use PhpOffice\PhpSpreadsheet\Shared\Date as SharedDate;

class LaptopDataImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);

        // Cek apakah data sudah ada dalam basis data berdasarkan kriteria tertentu
        $existingData = LaptopData::where(function ($query) use ($row) {
            $query->where('no_sample', $row[1])
                ->where('model', $row[3])->where('serial_number', $row[4]); // Menambahkan pengecekan model
        })->first();

        // Jika data sudah ada, abaikan
        if ($existingData) {
            $existingData->update([
                'user_id' => auth()->user()->id,
                'no_sample' => $row[1] ? $row[1] : '',
                'id_category' => $row[2] ? $row[2] : 1,
                'model' => $row[3] ? $row[3] : '',
                'serial_number' => $row[4] ? $row[4] : '',
                'screen_size' => $row[5] ? $row[5] : '',
                'processor' => $row[6] ? $row[6] : '',
                'storage_1' => $row[7] ? $row[7] : '',
                'size_1' => $row[8] ? $row[8] : '',
                'storage_2' => $row[9] ? $row[9] : '',
                'size_2' => $row[10] ? $row[10] : '',
                'ram' => $row[11] ? $row[11] : '',
                'graphic_1' => $row[12] ? $row[12] : '',
                'graphic_2' => $row[13] ? $row[13] : '',
                'mac_address' => $row[14] ? $row[14] : '',
                'wlan_or_bt_module' => $row[15] ? $row[15] : '',
                'modem' => $row[16] ? $row[16] : '',
                'colour' => $row[17] ? $row[17] : '',
                'OS' => $row[18] ? $row[18] : '',
                'install_os_date' => $row[21] ? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[21])->format('Y-m-d') : '',
                'charger' => $row[20] ? $row[20] : 0,
                'condition_notes' => $row[19] ? $row[19] : '',
                'date_check' => $row[22] ? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[22])->format('Y-m-d') : '',
                'location' => $row[23] ? $row[23] : '',
                'position' => $row[24] ? $row[24] : '',
                'expedision' => $row[25] ? $row[25] : '',
                'in_date' => $row[26] ? \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[26])->format('Y-m-d') : '',
                'status' => $row[27] ? $row[27] : '',
                'additional_info' => $row[28] ? $row[28] : '',
                // Update kolom lainnya sesuai kebutuhan
                // ...
            ]);

            // Anda bisa memberikan feedback bahwa data telah diperbarui
            Log::info('Data dengan nomor sample ' . $row[1] . ' telah diperbarui.');

            return $existingData; // Kembalikan data yang diperbarui
        }

        return new LaptopData([
            'user_id' => auth()->user()->id,
            'no_sample' => $row[1] ? $row[1] : '',
            'id_category' => $row[2] ? $row[2] : 1,
            'model' => $row[3] ? $row[3] : '',
            'serial_number' => $row[4] ? $row[4] : '',
            'screen_size' => $row[5] ? $row[5] : '',
            'processor' => $row[6] ? $row[6] : '',
            'storage_1' => $row[7] ? $row[7] : '',
            'size_1' => $row[8] ? $row[8] : '',
            'storage_2' => $row[9] ? $row[9] : '',
            'size_2' => $row[10] ? $row[10] : '',
            'ram' => $row[11] ? $row[11] : '',
            'graphic_1' => $row[12] ? $row[12] : '',
            'graphic_2' => $row[13] ? $row[13] : '',
            'mac_address' => $row[14] ? $row[14] : '',
            'wlan_or_bt_module' => $row[15] ? $row[15] : '',
            'modem' => $row[16] ? $row[16] : '',
            'colour' => $row[17] ? $row[17] : '',
            'OS' => $row[18] ? $row[18] : '',
            'install_os_date' => $row[21] ?  \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[21])->format('Y-m-d') : '',
            'charger' => $row[20] ? $row[20] : 0,
            'condition_notes' => $row[19] ? $row[19] : '',
            'date_check' => $row[22] ?  \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[22])->format('Y-m-d') : '',
            'location' => $row[23] ? $row[23] : '',
            'position' => $row[24] ? $row[24] : '',
            'expedision' => $row[25] ? $row[25] : '',
            'in_date' =>  $row[26] ?  \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[26])->format('Y-m-d') : '',
            'status' => $row[27] ? $row[27] : 'in',
            // 'additional_info' => $row[28] ? $row[28] : '',
        ]);
    }
}
