<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsDewey extends Model
{
    use HasFactory;

    public function ss_deweys()
    {
        return $this->hasMany(SsDewey::class);
    }

}
