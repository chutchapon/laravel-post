<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_type extends Model
{
    public function User()
    {
        return $this->hasMany('App\User');
    }
}
