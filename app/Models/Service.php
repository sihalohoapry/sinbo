<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'name_service',
        'descripsi_service',
        'service_price',
    ];

    protected $hidden =[];

    public function Booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}
