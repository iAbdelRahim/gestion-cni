<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class fatherController extends Controller
{
    //
    public function father(): View
    {
        return view('pere');
    }
}
