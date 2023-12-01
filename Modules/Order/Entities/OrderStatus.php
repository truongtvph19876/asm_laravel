<?php

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Order\Database\factories\OrderStatusFactory;

class OrderStatus extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'order_status';
    protected $fillable = [
        'status'
    ];

    protected static function newFactory(): OrderStatusFactory
    {
        //return OrderStatusFactory::new();
    }
}
