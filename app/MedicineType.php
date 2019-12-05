<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineType extends Model
{
    public function MedicineDatabases(){
        return $this->hasMany(MedicineDatabase::class);
    }
}
