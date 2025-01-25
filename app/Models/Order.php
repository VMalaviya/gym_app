<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
    ];

    /**
     * Relationship with SubOrder.
     */
    public function subOrders()
    {
        return $this->hasMany(SubOrder::class);
    }

    /**
     * Relationship with User (assuming a users table exists).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
