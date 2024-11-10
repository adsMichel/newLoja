<?php

namespace Modules\Sales\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Products\Models\Product;

// use Modules\Sales\Database\Factories\SalesOrderProductFactory;

class SalesOrderProduct extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'sales_order_id',
        'product_id',
        'quantity',
    ];

    public function salesOrder()
    {
        return $this->belongsTo(SalesOrder::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
