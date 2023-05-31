<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function job(): View
    {
        return view('profession');
    }
}
