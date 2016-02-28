<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class PagesController extends Controller
{
    public function home() {

        $people = ['bojo', 'tosho', 'mladen'];
        return  view('welcome')->with('people', $people);
    }

    public function about()
    {
        return view('about');
    }


}
