<?php

namespace Modules\User\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'users';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\User\database\factories\UserFactory::new();
    }
}
