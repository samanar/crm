<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechnicalInformation extends Model
{
    public function apartment()
    {
        $this->belongsTo('App\Apartment');
    }
}
