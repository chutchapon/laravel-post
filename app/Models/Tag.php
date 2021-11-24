<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function Tag_Post()
    {
        return $this->HasMany('App\Models\Tag_Post');
    }
}
