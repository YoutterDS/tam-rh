<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingUser extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'phone_number',
        'email',
        'step',
        'locale',
        'package',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_email_send_at' => 'datetime',
        'second_email_send_at' => 'datetime',
        'third_email_send_at' => 'datetime',
    ];


    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->surname;
    }
}
