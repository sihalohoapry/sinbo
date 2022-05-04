<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function Booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function Sparepart(): BelongsTo {
        return $this->belongsTo(Sparepart::class);
    }
}
