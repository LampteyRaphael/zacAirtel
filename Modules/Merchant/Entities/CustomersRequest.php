<?php

namespace Modules\Merchant\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomersRequest extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Merchant\Database\factories\CustomersRequestFactory::new();
    }
}
