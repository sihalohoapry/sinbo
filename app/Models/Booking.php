<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title_booking',
        'description_booking',
        'date_booking',
        'status_booking',
        'status_service',
        'grand_total_booking',
    ];

    protected $hidden = [];
}
