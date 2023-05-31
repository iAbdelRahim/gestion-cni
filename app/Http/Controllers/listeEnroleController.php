<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class listeEnroleController extends Controller
{
    //
    public function liste(): View
    {
        return view('liste');
    }
}
