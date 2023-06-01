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
    public function register()
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
     
        // $this->validate($request, [
        //     'lien_photo' => "required|file|max:2048|mimes:png,jpg",
        // ]);


        // if($request->hasFile('lien_photo')) {
        //     $path_des = "public/img";
        //     $photo = $request->file('lien_photo');
        //     $filename =  $photo->getClientOriginalName();
        //     $path= $request->file('lien_photo')->storeAs( $path_des ,  $filename1,'public'  );
        //  }

        //  $enroler->lien_photo = $filename1;
        
        //  if($request->hasFile('lien_signature')) {
        //     $path_des = "public/img";
        //     $photo = $request->file('lien_signature');
        //     $filename =  $photo->getClientOriginalName();
        //     $path= $request->file('lien_signature')->storeAs( $path_des ,  $filename2,'public'  );
        //  }
        // $enroler->lien_signature = $filename2;
        
        //  if($request->hasFile('lien_empreinte')) {
        //     $path_des = "public/img";
        //     $photo = $request->file('lien_empreinte');
        //     $filename =  $photo->getClientOriginalName();
        //     $path= $request->file('lien_empreinte')->storeAs( $path_des ,  $filename3,'public'  );
        //  }
        // $enroler->lien_empreinte = $filename3;
        


        $images =  time() . '.' . $request->file("lien_photo")->getClientOriginalExtension();
        $request->lien_photo->move(public_path('img'),$images );
        $enroler->lien_photo = $images;
     

        $images =  time() . '.' . $request->file("lien_signature")->getClientOriginalExtension();
        $request->lien_signature->move(public_path('img'),$images );
        $enroler->lien_signature = $images;
       
        $images =  time() . '.' . $request->file("lien_empreinte")->getClientOriginalExtension();
        $request->lien_empreinte->move(public_path('img'),$images );
        $enroler->lien_empreinte = $images;



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
        
        $enroler->signataire= Auth()->user()->name;
     
//upload des photo


        $enroler->visa = $request->visa;
       
        $enroler->save();
        
        // Autres actions ou redirection en cas de succès

        return redirect()->back()->with('success', 'Les fichiers et les données ont été enregistrés avec succès.');
    }





    public function show()
    {
        $enrolers = Enroler::all();
        return view('liste',compact('enrolers'));
    }




    public function destroy(string $id_enrolement)
    {

        // dd($id_enrolement);
        $enroler = Enroler::destroy($id_enrolement);
        // dd($enroler);
        // $enroler->delete();
        return redirect()->back()->with('message','le produit a été supprimer');
    }


}
