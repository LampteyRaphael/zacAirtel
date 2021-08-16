<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{
    use HasFactory;

    protected $fillable =[
    'ware_house_name',
    'ware_house_code',
    'ware_house_tel',
    'ware_house_address',
    'ware_house_category',
    'ware_house_email',
    'user_id'
    ];
}
