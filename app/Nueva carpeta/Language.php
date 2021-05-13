<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{

    public static function actives()
    {
        return Language::whereActive(1)->get();
    }

    public static function getByCode($code)
    {
        return Language::whereCode($code)->get()->first();
    }
}
