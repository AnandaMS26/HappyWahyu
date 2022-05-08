<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class MeatPackage extends Model
{
    use softDeletes;

    protected $fillable = [
        'title', 'slug', 'type', 'price', 'about'
    ];

    protected $hidden =  [

    ];

    public function galleries(){
        return $this->hasMany(Gallery::class, 'meat_packages_id', 'id');
    }
}
