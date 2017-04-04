<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class ClientLogin extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array

     */
    protected $table ="clients";
    protected $fillable = [
        'first_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}