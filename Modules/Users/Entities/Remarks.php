<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class remarks extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table='remark';

    protected static function newFactory()
    {
        return \Modules\Users\Database\factories\RemarksFactory::new();
    }
}
