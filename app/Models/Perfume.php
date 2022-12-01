<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use HasFactory;

    //eager loading
    protected $with = ['brand'];

    //define o relacionamento com a marca (brand)
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
