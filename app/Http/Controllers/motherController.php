<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Profession;

class motherController extends Controller
{
    //
    public function mother(): View
    {
        $professions = Profession ::all();
        return view('mere', compact('professions'));
    }
}
