<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrolerController extends Controller
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
        $enrolers= new Enroler();
        $enrolers->nom= $request->nom;
        $enrolers->prenom= $request->prenom;
        $enrolers->prenom_mere= $request->prenom_mere;
        $enrolers->date_naissance_mere= $request->date_naissance_mere;

        $enrolers->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
