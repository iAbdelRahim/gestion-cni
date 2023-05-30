<?php

namespace App\Http\Controllers;

use App\Models\Mere;
use Illuminate\Http\Request;

class MereController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $meres= new Mere();
        $meres->id_profession= $request->id_profession;
        $meres->nom_mere= $request->nom_mere;
        $meres->prenom_mere= $request->prenom_mere;
        $meres->date_naissance_mere= $request->date_naissance_mere;

        $meres->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $meres = Mere::all();
        return view('',compact('meres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $meres = Mere::where('id',  Auth()->user()->id)->get();
        return view('',compact('meres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $meres= Mere::find($id);

        $meres->id_profession= $request->id_profession;
        $meres->nom_mere= $request->nom_mere;
        $meres->prenom_mere= $request->prenom_mere;
        $meres->date_naissance_mere= $request->date_naissance_mere;

        $meres->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $meres= Mere::find($id);
        $meres->delete();
    }
}
