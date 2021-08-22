<?php

namespace Modules\Merchant\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id'
    ];

    protected $table='category';
    protected $dates=['updated_at','created_at'];

    protected static function newFactory()
    {
        return \Modules\Merchant\Database\factories\CategoryFactory::new();
    }
}
