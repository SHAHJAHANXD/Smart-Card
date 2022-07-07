<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function advertisments()
    {
        return $this->morphTo();
    }

    public function offers()
    {
        return $this->morphTo();
    }
}
