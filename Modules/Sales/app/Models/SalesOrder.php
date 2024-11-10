<?php

namespace Modules\Sales\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Sales\Database\Factories\SalesOrderFactory;

class SalesOrder extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'total',
        'forma_pagamento',
    ];

    public function salesOrderProducts()
    {
        return $this->hasMany(SalesOrderProduct::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
