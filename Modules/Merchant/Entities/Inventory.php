<?php

namespace Modules\Merchant\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
    'category_id',
    'brand_id',
    'item_id',
    'serial',
    'model',
    'ware_house_id',
    'description',
    'status',
    'user_id'
    ];

protected $table='inventory';
protected $dates=['created-at','updated_at'];

    protected static function newFactory()
    {
        return \Modules\Merchant\Database\factories\InventoryFactory::new();
    }


public function brand(){

return $this->belongsTo(Brands::class,'brand_id','id');

}

public function item(){

    return $this->belongsTo(Items::class,'item_id','id');
}

public function category(){

    return $this->belongsTo(Category::class,'category_id','id');
}


public function user(){

    return $this->belongsTo(User::class,'user_id','id');
}


public function status0(){
return $this->belongsTo(StatusCategory::class,'status','id');
}


}
