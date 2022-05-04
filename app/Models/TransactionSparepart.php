<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionSparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'profit'
    ];
}
