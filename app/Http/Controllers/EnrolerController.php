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

        $enrolers->lib_pays= $request->lib_pays;
        $enrolers->id_profession= $request->id_profession;
        $enrolers->id_pere= $request->id_pere;
        $enrolers->id_mere= $request->id_mere;
        $enrolers->id_sexe= $request->id_sexe;
        $enrolers->visa= $request->visa;
        $filename1="";
        $filename2="";
        $filename3="";


        if($request->hasFile('lien_photo')) {
            $filename1 = $request->getSchemeAndHttpHost() . '/img' . time() . '.' . $request->img->extension();  
            $request->img->moov(public_path('/img'), $filename1);
          
         }

         if($request->hasFile('lien_empreinte')) {
            $filename2 = $request->getSchemeAndHttpHost() . '/img' . time() . '.' . $request->img->extension();  
            $request->img->moov(public_path('/img'), $filename2);
          
         }

         if($request->hasFile('lien_signature')) {
            $filename3 = $request->getSchemeAndHttpHost() . '/img' . time() . '.' . $request->img->extension();  
            $request->img->moov(public_path('/img'), $filename3);
          
         }

         
         $enrolers->lien_photo= $filename1;
         $enrolers->lien_empreinte= $filename2;
         $enrolers->lien_signature= $filename3;



        $enrolers->nom= $request->nom;
        $enrolers->prenom= $request->prenom;
        $enrolers->heure_naissance= $request->heure_naissance;
        $enrolers->lieu_naissance= $request->lieu_naissance;
        $enrolers->taille= $request->taille;
        $enrolers->date_emission= $request->date_emission;
        $enrolers->date_expiration= $request->date_expiration;
        $enrolers->date_enrolement= $request->date_enrolement;
        $enrolers->date_naissance= $request->date_naissance;
       



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
