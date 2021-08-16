<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    protected $table='status_category';

    protected static function newFactory()
    {
        return \Modules\Users\Database\factories\StatusCategoryFactory::new();
    }
}
