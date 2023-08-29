<?php

namespace App\Http\Controllers;
use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function aff_actualite()
    {
        $actualites = Actualite::all();
        return view('actualite.actualite', compact('actualites'));
    }



public function Ajouter_actualite(Request $request)
{
  $request->validate([
    'User' => 'required',
    'nom' => 'required',
    'description' => 'required',
  ]);

  //Extensification de l'objet etudiant
   $actualites =  new Actualite();
   $actualites->User = $request->User;
   $actualites->nom = $request->nom;
   $actualites->description = $request->description;
   $actualites->save();
  return redirect('/actualite')->with('status', 'actualité ajouter avec succès !');
}
public function modifier_actualite_traitement(Request $request)
{
  $request->validate([
    'User' => 'required',
    'nom' => 'required',
    'description' => 'required',
  ]);

  //Extensification de l'objet etudiant
   $actualites =  Actualite::find($request->id);
   $actualites->User = $request->User;
   $actualites->nom = $request->nom;
   $actualites->description = $request->description;
   $actualites->update();
  return redirect('/actualite')->with('status', 'actualité modifier avec succès !');
}


public function delete_actualite($id)
    {
      $actualites = Actualite::find($id);
      $actualites->delete();
      return redirect('/actualite')->with('supp', 'actualité supprimer avec succès !');;
    }
}
