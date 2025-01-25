<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'package_id',
        'quantity',
        'subtotal',
        'start_date',
        'end_date',
    ];

    /**
     * Relationship with Order.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Relationship with Package.
     */
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
