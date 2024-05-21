<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelLaptop extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'category_model',
    ];

    public function products()
    {
        return $this->hasMany(LaptopData::class, 'id_category', 'id');
    }
}
