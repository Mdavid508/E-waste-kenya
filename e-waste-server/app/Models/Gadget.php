<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Company;
use App\Models\Image;

class Gadget extends Model
{
    use HasFactory;


    //define your relationships here
    
public function user(){
    return $this->belongsTo(User::class);
}

public function category(){
    return $this->hasOne(Category::class);
}
public function company(){
    return $this->belongsTo(Company::class,'user_id');
}
public function images(){
    return $this->hasMany(Image::class);
}
}
