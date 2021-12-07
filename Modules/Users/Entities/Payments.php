<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payments extends Model
{
    use HasFactory;

    protected $table='payment';

    protected $fillable = [
        'amount',
        'reseller_id',
        'commission_id',
        'status_status_id',
        'user_id',
        'transaction_id'
    ];

    protected $dates=['updated_at','created_at'];

    
    protected static function newFactory()
    {
        return \Modules\Users\Database\factories\PaymentsFactory::new();
    }


    public function  service(){

        return $this->belongsTo(Service::class,'reseller_id','service_id');
    }


    public function  status(){

        return $this->belongsTo(PaymentStatus::class,'status_status_id','id');
    }


}
