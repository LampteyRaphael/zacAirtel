<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Items extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','user_id',
    ];

    protected $table='item';

    protected $dates=['created_at','updated_at'];

    protected static function newFactory()
    {
        return \Modules\Users\Database\factories\ItemsFactory::new();
    }
}
