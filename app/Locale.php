<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    public function getNameAttribute()
    {
        return $this['name_' . app()->getLocale()];
    }
}
