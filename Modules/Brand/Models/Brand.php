<?php

namespace Modules\Brand\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Modules\Product\Models\Product;

class Brand extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'brands';

    protected $fillable = [
        'brand_name',
        'brand_logo',
        'description',
        'status'
    ];

//    public $timestamps = false;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Brand\database\factories\BrandFactory::new();
    }

    public function product() {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }

    public function countProductInBrand() {
        $product = Product::select('brand_id', DB::raw('COUNT(brand_id) AS total'))
            ->groupBy('brand_id')
            ->having('brand_id', $this->id)
            ->first();

        if ($product)
            return $product->total;
        return 0;
    }
}
