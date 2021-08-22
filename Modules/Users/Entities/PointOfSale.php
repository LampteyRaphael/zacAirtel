<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PointOfSale extends Model
{
    use HasFactory;

    protected $table='point_sale';
    protected $dates=['created_at','updated_at'];

    protected $fillable = [
        'date',
        'itemID',
        'sub_total',
        'qty',
        'user_id',
        'unit_price',
        'charges',
        'ware_id',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Users\Database\factories\PointOfSaleFactory::new();
    }

    public function item(){

        return $this->belongsTo(Items::class,'item_id','id');
    }
}
