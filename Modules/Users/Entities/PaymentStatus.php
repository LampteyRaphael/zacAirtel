<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentStatus extends Model
{
    use HasFactory;

    protected $table='payment_status';

    protected $fillable = [
        'name',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Users\Database\factories\PaymentStatusFactory::new();
    }
}
