<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function getNameAttribute($value)
    {
        return $this['name_' . \App::getLocale()];
    }
    public function getSlugAttribute($value)
    {
        return $this['slug_' . \App::getLocale()];
    }
}
