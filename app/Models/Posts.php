<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Categories()
    {
        return $this->belongsTo('App\Models\Categories');
    }

    public function Tag_posts()
    {
        return $this->HasMany('App\Models\Tag_posts');
    }

    public function Comments()
    {
        return $this->HasMany('App\Models\Comments');
    }
}
