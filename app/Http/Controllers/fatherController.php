<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Profession;

class fatherController extends Controller
{
    //
    public function father(): View
    {
        $professions = Profession ::all();
        return view('pere', compact('professions'));
    }
}
