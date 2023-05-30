<?php

namespace App\Http\Controllers;

use App\Models\Pere;
use Illuminate\Http\Request;

class PereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $peres= new Pere();
        $peres->id_profession= $request->id_profession;
        $peres->nom_pere= $request->nom_pere;
        $peres->prenom_pere= $request->prenom_pere;
        $peres->date_naissance_pere= $request->date_naissance_pere;

        $peres->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peres = Pere::all();
        return view('',compact('peres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peres = Pere::where('id',  Auth()->user()->id)->get();
        return view('',compact('peres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $peres= Pere::find($id);

        $peres->id_profession= $request->id_profession;
        $peres->nom_pere= $request->nom_pere;
        $peres->prenom_pere= $request->prenom_pere;
        $peres->date_naissance_pere= $request->date_naissance_pere;

        $peres->update();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peres= Pere::find($id);
        $peres->delete();
    }
}
