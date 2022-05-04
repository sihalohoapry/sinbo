<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderSparepartBooking extends Model
{
    use HasFactory;

    protected $filable = [
        'booking_id',
        'sparepart_id',
        'qty',
        'price',
        'grand_price',
        'profit',
    ];

    protected $hidden = [];
}
