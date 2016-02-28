<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function person()
    {
        $this->belongsTo(Person::class);
    }
}
