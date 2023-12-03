<?php

namespace Modules\Product\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Brand\Models\Brand;

class Product extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';
    protected $fillable = [
        'brand_id',
        'product_name',
        'product_slug',
        'product_price',
        'product_image',
        'product_quantity',
        'description',
        'detail',
        'status'
    ];

    public function brand() {
        return $this->belongsTo('Modules\Brand\Models\Brand');
    }

    public function product_related_brand() {
        $products = Product::query()
            ->where('brand_id', $this->brand_id)
            ->whereNotIn('id', [$this->id])
            ->get();
        return $products;
    }

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Product\database\factories\ProductFactory::new();
    }
}
