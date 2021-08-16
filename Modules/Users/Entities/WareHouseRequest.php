<?php

namespace Modules\Users\Entities;

use App\Models\User;
use App\Models\WareHouse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class wareHouseRequest extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_id',
    'item_id',
    'quantity',
    'ware_id',
    'remark',
    'autOfficer',
    'quantityIssued'
    ];

protected $table ='ware_house_request';

protected $dates=['created_at','updated_at'];

    protected static function newFactory()
    {
        return \Modules\Users\Database\factories\WareHouseRequestFactory::new();
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

    public function remarks(){
        return $this->belongsTo(Remarks::class,'remark','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function status0(){
         return $this->belongsTo(StatusCategory::class,'status','id');
    }
    public function wareHouse(){
        return $this->belongsTo(WareHouse::class,'ware_id','warehouse_id');
    }


}
