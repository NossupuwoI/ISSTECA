<?php

namespace App\Http\Controllers;
use App\Models\Specialite;
use App\Models\Filiere;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    public function aff_specialite()
    {
        $specialites = Specialite::all();
        $filieres= Filiere::all();
        return view('specialite.specialite', compact('specialites','filieres'));
    }

    public function ajouter_specialite(Request $request)
    {
      $request->validate([
        'User' => 'required',
        'nom' => 'required',
        'Filiere' => 'required',
        
      ]);

      //Extensification de l'objet etudiant
       $specialite = new Specialite();
       $specialite->User = $request->User;
       $specialite->nom = $request->nom;
       $specialite->Filiere = $request->Filiere;
       $specialite->save();
      return redirect('/specialite')->with('status', 'Spécialité ajouter avec succès !');;
    }

    public function modifier_specialite_traitement(Request $request)
    {
        $request->validate([
            'User' => 'required',
            'nom' => 'required',
            'Filiere' => 'required',
          ]);
    
          //Extensification de l'objet etudiant
           $specialite = Specialite::find($request->id);
           $specialite->User = $request->User;
           $specialite->nom = $request->nom;
           $specialite->Filiere = $request->Filiere;
           $specialite->update();
          return redirect('/specialite')->with('status', 'Spécialité Modifier avec succès !');
    }

    public function delete_specialite($id)
    {
      $specialites = Specialite::find($id);
      $specialites->delete();
      return redirect('/specialite')->with('supp', 'specialite supprimer avec succès !');
    }
}
