<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $table='service';

    protected $uploads='/photos/';

    protected $dates=['updated_at','created_at'];

    protected $fillable = [
        'service_id',
        'service_name',
        'photo'
    ];

    public function getPhotoAttribute($pdf){
        return $this->uploads.$pdf;
    }


    protected static function newFactory()
    {
        return \Modules\Users\Database\factories\ServiceFactory::new();
    }

}
