<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gadget;
use App\Models\Categories_company;
class Company extends Model
{
    use HasFactory;
    //use relationships here
    public function gadgets(){
        return $this->hasMany(Gadget::class);
    }
    public function company_categories(){
        return $this->hasMany(Categories_company::class);
    }
}
