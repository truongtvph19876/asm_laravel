<?php

namespace Modules\Order\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Order\Entities\OrderStatus;
use Modules\Order\Entities\PaymentMethod;
use Modules\Product\Models\Product;
use Modules\User\Models\User;

class Order extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'orders';
    protected $fillable = [
        'product_id',
        'user_id',
        'status_id',
        'payment_id',
        'product_name',
        'quantity',
        'unit_price',
        'recipient_name',
        'recipient_phone',
        'recipient_city',
        'recipient_district',
        'recipient_ward',
        'recipient_detail_address',
        'note',
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Order\database\factories\OrderFactory::new();
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function status() {
        return $this->belongsTo(OrderStatus::class);
    }

    public function payment() {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function getImage() {
        $image = Product::find($this->product_id);
        if ($image) {
            return$image->product_image;
        } else {
            return 'error';
        }
    }

    public function getStatus() {
        $status = OrderStatus::find($this->status_id);
        if ($status) {
            return $status->status;
        }
        return 'error';
    }
}
