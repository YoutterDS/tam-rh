<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    use HasFactory;

    // Mutators
    public function getNameAttribute()
    {
        return $this['name_' . app()->getLocale()];
    }
}
