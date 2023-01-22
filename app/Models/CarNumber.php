<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarNumber extends Model
{
    use HasFactory;
    public function properties(){
        return $this->hasMany(Property::class);
    }
}