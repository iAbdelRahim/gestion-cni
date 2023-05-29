<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('connexion');
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
        //    regle de validation 
        $donnee=$request->validate([
            'email'=> 'required|email',
            'password' => 'required',
        ]);
        // verifie s'il a pu se connecter

        if(Auth::attempt($request->only('email', 'password'))){
            if(auth()->user()->role ==='admin' ){
                return redirect('TimetableAdmin');
            }
            else{
                return redirect('');
            }

        }

        // envoi une erreur au cas ou la connexion n'a pas reuissie
        else{
            // message d'erreur
            session()->flash('msg', 'erreur est survenue verifiez vos données.');
            return redirect()->back();

        }
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
