<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_sparepart',
        'slug',
        'stock_sparepart',
        'status_sparepart',
        'selling_price',
        'purchase_price',
        'description',
        'foto_sparepart',
    ];

    protected $hidden = [];
}
