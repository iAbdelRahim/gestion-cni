<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Enroler;

class CniScreenController extends Controller
{
    //
    public function cni(): View
    {
        return view('cni');
    }
 

    public function showCni($id_enrolement){
        $enroler = Enroler::find($id_enrolement);
        return view('cni',compact('enroler'));
    }
}
