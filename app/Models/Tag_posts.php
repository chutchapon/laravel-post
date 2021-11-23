<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_posts extends Model
{
    public function Posts()
    {
        return $this->belongsTo('App\Models\Posts');
    }

    public function Tags()
    {
        return $this->belongsTo('App\Models\Tags');
    }
}
