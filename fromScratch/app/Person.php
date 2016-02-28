<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

}
