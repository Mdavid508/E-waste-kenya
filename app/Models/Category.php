<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gadget;

class Category extends Model
{
    use HasFactory;

    //define your relationships here

    public function gadgets(){
        return $this->hasMany(Gadget::class);
    }
}
