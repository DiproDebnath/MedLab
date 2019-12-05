<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{

    public function MedicineDatabases(){
        return $this->hasMany(MedicineDatabase::class);
    }
}
