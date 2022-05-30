<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gadget;

class Image extends Model
{
    use HasFactory;

    //use this to create your relationships
    public function gadget(){
        return $this->belongsTo(Gadget::class);
    }

}
