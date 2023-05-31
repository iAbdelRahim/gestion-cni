<?php

namespace App\Http\Controllers;

use App\Models\Enroler;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Pere;
use App\Models\Mere;
use App\Models\Profession;
use App\Models\Pays;
use App\Models\Sexe;




class RegisterController extends Controller
{
    //
    public function register(): View
    {
        $peres = Pere ::all();
        $meres = Mere ::all();
        $professions = Profession ::all();
        $pays = Pays ::all();
        $sexe = Sexe ::all();

        return view('register', compact('meres','peres','professions','pays','sexe'));
    }




    public function store(Request $request)
    {
        $enroler = new Enroler();

        if ($request->hasFile('lien_photo')) {
            $photo = $request->file('lien_photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $path_des = "public/photo";
            $photo->storeAs($path_des, $filename);
            $enroler->lien_photo = $filename;
        }

        if ($request->hasFile('lien_signature')) {
            $signature = $request->file('lien_signature');
            $filename2 = time() . '.' . $signature->getClientOriginalExtension();
            $path_des = "public/photo";
            $signature->storeAs($path_des, $filename2);
            $enroler->lien_signature = $filename2;
        }

        if ($request->hasFile('lien_empreinte')) {
            $empreinte = $request->file('lien_empreinte');
            $filename3 = time() . '.' . $empreinte->getClientOriginalExtension();
            $path_des = "public/photo";
            $empreinte->storeAs($path_des, $filename3);
            $enroler->lien_empreinte = $filename3;
        }
        $chiffreAleatoire = mt_rand(1, 999999999);
        $sequence = 'id' . $chiffreAleatoire;

        $chiffreAleatoirenni = mt_rand(1, 999999999);
        $sequencenni = 'id' . $chiffreAleatoirenni;

        // Assigner les autres champs de l'objet $enroler ici
        $enroler->id_enrolement = $sequence ;
        $enroler->nni = $sequencenni ;
        $enroler->id_pere = $request->id_pere;
        $enroler->id_mere = $request->id_mere;
        $enroler->prenom = $request->prenom;
        $enroler->nom = $request->nom;
        $enroler->id_sexe = $request->id_sexe;
        $enroler->id_pays = $request->id_pays;
        $enroler->date_naissance = $request->date_naissance;
        $enroler->heure_naissance = $request->heure_naissance;
        $enroler->lieu_naissance = $request->lieu_naissance;
        $enroler->id_profession = $request->id_profession;
        $enroler->taille = $request->taille;
        $enroler->date_emission = $request->date_emission;
        $enroler->date_expiration = $request->date_expiration;
        $enroler->date_enrolement = $request->date_enrolement;

        $enroler->signataire= Auth()->user()->nom;

//upload des photo
        $enroler->lien_photo = $request->lien_photo;
        $enroler->lien_signature = $request->lien_signature;
        $enroler->lien_empreinte = $request->lien_empreinte;


        $enroler->visa = $request->visa;

        $enroler->save();

        // Autres actions ou redirection en cas de succès

        return redirect()->back()->with('success', 'Les fichiers et les données ont été enregistrés avec succès.');
    }




}
