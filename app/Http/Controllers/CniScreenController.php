<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class CniScreenController extends Controller
{
    //
    public function cni(): View
    {
        return view('cni');
    }
}
