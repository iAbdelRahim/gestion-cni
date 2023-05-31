<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //
    public function country(): View
    {
        return view('country');
    }
}
