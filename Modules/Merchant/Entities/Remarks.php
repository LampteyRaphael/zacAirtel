<?php

namespace Modules\Merchant\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class remarks extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table='remark';

    protected static function newFactory()
    {
        return \Modules\Merchant\Database\factories\RemarksFactory::new();
    }
}
