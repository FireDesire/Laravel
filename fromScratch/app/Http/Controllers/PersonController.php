<?php

namespace App\Http\Controllers;

use App\Person;
use App\Phone;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    public function show(Person $person)
    {
        return view('person', compact('person'));

//        $phone = Phone::where('person_id', '=', $person->id)->get();
//
//        return view('person', compact('person', 'phone'));
    }
}
