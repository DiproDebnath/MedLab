<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Manufacturer;
class Medicine extends Model
{


    public function Manufacturer(){
        return $this->belongsTo( Manufacturer::class);
    }
}
