<?php

namespace Modules\Test\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tests';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Test\database\factories\TestFactory::new();
    }
}
