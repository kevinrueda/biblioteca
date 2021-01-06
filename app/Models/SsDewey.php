<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SsDewey extends Model
{
    use HasFactory;

    public function ts_deweys()
    {
        return $this->hasMany(TsDewey::class);
    }
    
}
