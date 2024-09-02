<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    /**
     * Get all the product colours associated with the product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ProductColour(): HasMany {
        return $this->hasMany(ProductColour::class);
    }

    protected $casts = 
    [
        'product_image' => 'array',
        'colour_name' => 'array',
        'size_name' => 'array',
    ];

}
