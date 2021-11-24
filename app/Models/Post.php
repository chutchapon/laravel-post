<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function Tag_Post()
    {
        return $this->HasMany('App\Models\Tag_Post');
    }

    public function Comment()
    {
        return $this->HasMany('App\Models\Comment');
    }
}
