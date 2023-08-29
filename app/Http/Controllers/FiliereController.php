<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;
class FiliereController extends Controller
{
    public function aff_filiere()
    {
        $filieres = Filiere::all();
        return view('filiere.filiere', compact('filieres'));
    }
    public function ajouter_filière(Request $request)
    {
      $request->validate([
        'User' => 'required',
        'nom' => 'required',
      ]);

      //Extensification de l'objet etudiant
       $filiere = new Filiere();
       $filiere->User = $request->User;
       $filiere->nom = $request->nom;
       $filiere->save();

     

      return redirect('/filiere')->with('status', 'Filière ajouter avec succès !');;
    }

    public function modifier_filiere_traitement(Request $request)
    {
      $request->validate([
        'User' => 'required',
        'nom' => 'required',
      ]);

      //Extensification de l'objet etudiant
       $filiere = Filiere::find($request->id);
       $filiere->User = $request->User;
       $filiere->nom = $request->nom;
       $filiere->update();

     

      return redirect('/filiere')->with('status', 'Filière Modifier avec succès !');
    }

    public function delete_filiere($id)
    {
      $filieres = Filiere::find($id);
      $filieres->delete();
      return redirect('/filiere')->with('supp', 'Filiere supprimer avec succès !');;
    }
}
