<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LaptopData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'no_sample',
        'id_category',
        'model',
        'serial_number',
        'screen_size',
        'processor',
        'storage_1',
        'size_1',
        'storage_2',
        'size_2',
        'ram',
        'graphic_1',
        'graphic_2',
        'mac_address',
        'wlan_or_bt_module',
        'modem',
        'colour',
        'OS',
        'install_os_date',
        'charger',
        'condition_notes',
        'date_check',
        'location',
        'position',
        'expedision',
        'in_date',
        'status',
        // 'out_date',
        // 'additional_info',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(ModelLaptop::class, 'id_category');
    }

    public function transaction()
    {
        return $this->hasMany(Transaksi::class);
    }
}
