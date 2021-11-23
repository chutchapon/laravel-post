<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function Posts()
    {
        return $this->belongsTo('App\Models\Posts');
    }

    public function Users()
    {
        return $this->belongsTo('App\Models\Posts');
    }
}
