<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
<<<<<<< HEAD
use  App\Models\User;
Use Illuminate\Support\Facades\Hash;
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> 717496a83495207cc118502770cdc7a8082bb518

class ConnectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
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
<<<<<<< HEAD

       
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            if (Auth::attempt($credentials)) {
                // Authentification réussie
                return redirect()->intended('/accueil');
            } else {
                // Authentification échouée
                return redirect()->route('login')
                    ->with('error', 'Adresse email ou mot de passe incorrect.');
            }
    
    

   
        
=======
        //    regle de validation
        $donnee=$request->validate([
            'email'=> 'required|email',
            'password' => 'required',
        ]);
        // verifie s'il a pu se connecter

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('landing');
        }

        // envoi une erreur au cas ou la connexion n'a pas reuissie
        else{
            // message d'erreur
            session()->flash('msg', 'erreur est survenue verifiez vos données.');
            return redirect()->back();

        }
>>>>>>> 717496a83495207cc118502770cdc7a8082bb518
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
