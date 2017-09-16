<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    public function basic_information()
    {
        return $this->hasOne('App\BasicInformation');
    }

    public function technicalInformation()
    {
        return $this->hasMany('App\TechnicalInformation');
    }

    public function elevator_checklists()
    {
        return $this->hasMany('App\ElevatorChecklist');
    }

    public function engine_room_checklists()
    {
        return $this->hasMany('App\EngineRoomChecklists');
    }
}
