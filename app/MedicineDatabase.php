<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineDatabase extends Model
{
    //
    public function Manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }
    public function MedicineType(){
        return $this->belongsTo(MedicineType::class);
    }
}
