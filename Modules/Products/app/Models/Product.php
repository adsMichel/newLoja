<?php

namespace Modules\Products\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Sales\Models\SalesOrderProduct;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Media\Models\Media;

// use Modules\Products\Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
    ];

    public function salesOrderProduct()
    {
        return $this->belongsTo(SalesOrderProduct::class);
    }

    public function media(): BelongsToMany
    {
        return $this->belongsToMany(Media::class, 'product_has_media');
    }
}
