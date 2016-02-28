<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}
