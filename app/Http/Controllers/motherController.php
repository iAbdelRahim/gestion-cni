<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class motherController extends Controller
{
    //
    public function mother(): View
    {
        return view('mere');
    }
}
