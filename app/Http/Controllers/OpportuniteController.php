<?php

namespace App\Http\Controllers;
use App\Models\Opportunite;
use Illuminate\Http\Request;

class OpportuniteController extends Controller
{
    public function aff_opportunite()
    {
        $opportunites = Opportunite::all();
        return view('opportunite.opportunite', compact('opportunites'));
    }



public function Ajouter_opportunite(Request $request)
{
  $request->validate([
    'User' => 'required',
    'nom' => 'required',
    'description' => 'required',
  ]);

  //Extensification de l'objet etudiant
   $opportunite =  new Opportunite();
   $opportunite->User = $request->User;
   $opportunite->nom = $request->nom;
   $opportunite->description = $request->description;
   $opportunite->save();
  return redirect('/opportunite')->with('status', 'opportunité ajouter avec succès !');
}
public function modifier_opportunite_traitement(Request $request)
{
  $request->validate([
    'User' => 'required',
    'nom' => 'required',
    'description' => 'required',
  ]);

  //Extensification de l'objet etudiant
   $opportunite =  Opportunite::find($request->id);
   $opportunite->User = $request->User;
   $opportunite->nom = $request->nom;
   $opportunite->description = $request->description;
   $opportunite->update();
  return redirect('/opportunite')->with('status', 'opportunité modifier avec succès !');
}


public function delete_opportunite($id)
    {
      $opportunites = Opportunite::find($id);
      $opportunites->delete();
      return redirect('/opportunite')->with('supp', 'opportunite supprimer avec succès !');;
    }
}