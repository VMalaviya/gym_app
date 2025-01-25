<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'duration_months',
        'price',
    ];

    /**
     * Relationship with SubOrder.
     */
    public function subOrders()
    {
        return $this->hasMany(SubOrder::class);
    }
}
