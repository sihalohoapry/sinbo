<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderSparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'sparepart_id',
        'transaction_sparepart_id',
        'qty',
        'price',
        'garage_buy_price',
        'grand_price',
        'profit_order',
    ];

    public function Sparepart(): BelongsTo {
        return $this->belongsTo(Sparepart::class);
    }

    public function TransactionSparepart(): BelongsTo {
        return $this->belongsTo(TransactionSparepart::class);
    }
}
