<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function Posts()
    {
        return $this->HasMany('App\Models\Posts');
    }
}
