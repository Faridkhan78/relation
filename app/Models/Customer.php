<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function mobile(){
        return $this->hasOne(Mobile::class);
    }
    public function product(){
        return $this->hasOne(Product::class);
    }
}
