<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function getNameAttribute($value)
    {
        return $this['name_' . \App::getLocale()];
    }
}
