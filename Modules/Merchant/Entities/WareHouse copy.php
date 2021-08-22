<?php

namespace Modules\Merchant\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class wareHouse extends Model
{
    use HasFactory;

    protected $fillable = [
    'warehouse_id',
    'ware_house_name',
    'ware_house_code',
    'ware_house_tel',
    'ware_house_address',
    'ware_house_category',
    'user_id',
    'ware_house_email'
    ];
    protected $table ='ware_houses';

    protected $dates=['created_at','updated_at'];

    protected static function newFactory()
    {
        return \Modules\Merchant\Database\factories\WareHouseFactory::new();
    }
}
