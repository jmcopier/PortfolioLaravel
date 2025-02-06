<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function software()
    {
        return $this->hasMany(Software::class);
    }
}
