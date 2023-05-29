<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //controller pour retourner la vue landing
    public function landing(): View
    {
        return view('landing');
    }
}
