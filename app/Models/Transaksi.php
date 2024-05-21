<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory;

    public $table = "data_transaksi";

    protected $fillable = [
        'user_id',
        'laptop_id',
        'status',
        'location',
        'position',
        'keterangan',
    ];

    public function barang(): BelongsTo
    {
        return $this->belongsTo(LaptopData::class, 'laptop_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
