<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyPoint extends Model
{
    use HasFactory;
    
    
    
    
    
     public function users(){

     return $this->belongsTo(User::class);

    }
    
     public function packages(){

     return $this->belongsTo(Package::class);

    }
}
