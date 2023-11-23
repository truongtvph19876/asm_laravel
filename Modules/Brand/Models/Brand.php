<?php

namespace Modules\Brand\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
