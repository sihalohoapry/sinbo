<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderSparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'sparepart_id',
        'transaction_sparepart_id',
        'qty',
        'price',
        'grand_price',
        'profit_order',
    ];
}
