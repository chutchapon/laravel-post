<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_Post extends Model
{
    public function Post()
    {
        return $this->belongsTo('App\Models\Post');
    }

    public function Tag()
    {
        return $this->belongsTo('App\Models\Tag');
    }
}
