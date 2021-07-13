<?php

namespace App\Traits;

use Crypt;

trait Encryptable
{
    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);
        if( !$value ) {
            return null;
        }
        if (in_array($key, $this->encryptable)) {
            $value = Crypt::decrypt($value);
        }
        return $value;
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->encryptable)) {
            $value = Crypt::encrypt($value);
        }
        return parent::setAttribute($key, $value);
    }
}
