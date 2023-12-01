<?php

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Order\Database\factories\PaymentMethodFactory;

class PaymentMethod extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $table = 'payment_method';
    protected $fillable = [
        'payment_name'
    ];

    protected static function newFactory(): PaymentMethodFactory
    {
        //return PaymentMethodFactory::new();
    }
}
