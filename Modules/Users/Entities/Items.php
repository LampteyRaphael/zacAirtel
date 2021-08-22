<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Items extends Model
{
    use HasFactory;


    protected $fillable = [
        'name','user_id','item_image','wareh_id'
    ];

    protected $uploads='/images/';

    protected $table='item';

    protected $dates=['created_at','updated_at'];

    protected static function newFactory()
    {
        return \Modules\Users\Database\factories\ItemsFactory::new();
    }

    /**
     * Get the user that owns the Items
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function warehouse()
    {
        return $this->belongsTo(WareHouse::class, 'wareh_id', 'warehouse_id');
    }
}
