<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'quantity', 'total_price'];

    /**
     * Get the product that owns the order.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

