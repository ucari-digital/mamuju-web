<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'nickname', 'password', 'role', 'avatar', 'provider', 'provider_id'];
}
