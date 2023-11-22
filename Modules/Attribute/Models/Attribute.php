<?php

namespace Modules\Attribute\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'attributes';
    protected $fillable = [
        'name',
        'parent_id',
        'value',
        'description',
        'status'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Attribute\database\factories\AttributeFactory::new();
    }

    public function children()
    {
        return $this->hasMany(Attribute::class, 'parent_id');
    }
}
