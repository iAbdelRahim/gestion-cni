<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //pour afficher la vue accueil

    public function accueil(): View
    {
        return view('accueil');
    }
}
