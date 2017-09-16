<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElevatorCheckList extends Model
{
    protected $guarded = ['created_at' , 'updated_at' , 'apartment_id'];


    public function apartment()
    {
        return $this->belongsTo('App\Apartment');
    }
}
