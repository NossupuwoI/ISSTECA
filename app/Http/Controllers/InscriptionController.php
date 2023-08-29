<?php

namespace App\Http\Controllers;
use App\Models\Specialite;
use App\Models\Inscription;
use App\Models\User;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function Afficher_inscription()
    {
        $specialites = Specialite::all();
        return view('inscription.inscription', compact('specialites'));
    }
   

    public function Ajouter_inscription(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'cycle' => 'required',
            'specialite' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'naissance' => 'required',
            'photo' => 'required',
            'pays' => 'required',
            'nom_personne' => 'required',
            'contact' => 'required',
            'lieu' => 'required',
            'password' => 'required',
          ]);
        
          //Extensification de l'objet etudiant
           $inscriptions =  new Inscription();
           $inscriptions->nom = $request->nom;
           $inscriptions->prenom = $request->prenom;
           $inscriptions->sexe = $request->sexe;
           $inscriptions->cycle = $request->cycle;
           $inscriptions->specialite = $request->specialite;
           $inscriptions->telephone = $request->telephone;
           $inscriptions->email = $request->email;
           $inscriptions->naissance = $request->naissance;
           $inscriptions->photo = $request->photo;
           $inscriptions->pays = $request->pays;
           $inscriptions->nom_personne = $request->nom_personne;
           $inscriptions->contact = $request->contact;
           $inscriptions->lieu = $request->lieu;
           $inscriptions->save();

           if (!auth()->check())
           {
            $users =  new User();
            $users->name = $request->nom;
            $users->email = $request->email;
            $users->photo = $request->photo;
            $users->password = $request->password;
            $users->save();
           }
          return redirect('/')->with('status', 'Votre pré-inscription a été enregistrée avec succès. Veillez-vous connecter pour télécharger la fiche d’inscription !');   
    }

     
     

     public function Afficher_liste()
     {
        $inscriptions = Inscription::all();
        return view('inscription.liste', compact('inscriptions'));
     }
     public function Afficher_fiche($id)
     {
        $inscriptions = Inscription::find($id);
        return view('inscription.fiche', compact('inscriptions'));
     }

    
    
}
