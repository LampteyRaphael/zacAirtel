<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brands extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','user_id','ware_id'
    ];

protected $table='brand';

    protected static function newFactory()
    {
        return \Modules\Users\Database\factories\BrandsFactory::new();
    }
}
