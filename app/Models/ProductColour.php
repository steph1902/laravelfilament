<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductColour extends Model
{
    use HasFactory;

    /**
     * Get the product that owns the colour.
     */
    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
