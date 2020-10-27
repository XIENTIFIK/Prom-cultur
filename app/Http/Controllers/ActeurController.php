<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acteur;

class ActeurController extends Controller
{
    public function create(){
        return view('Dashboard.acteur.form_acteur');

    }


    public function liste() {
        $acteurs= Acteur::all();
 
        return view('Dashboard.acteur.acteur_liste',[
             'acteurs'=>$acteurs 
 
        ]);
}

    public function store(Request $request){
      
        $nom = $request['nom'];
        $prenom = $request['prenom'];
        $email = $request['email'];
        $telephone = $request['telephone'];
        $profession = $request['profession'];


        $acteurs = new Acteur();
        $acteurs->nom = $nom;
        $acteurs->prenom = $prenom;
        $acteurs->email = $email;
        $acteurs->telephone = $telephone;
        $acteurs->profession = $profession;
        $acteurs->save();


        return redirect('acteur_liste');
        
    }

    
    public function show($id){
        $acteurs = Acteur::where('id' ,$id)->first();
        return view('Dashboard.acteur.acteur_detail' , ['acteur'=> $acteurs]);
    }

    public function edit($id){
        $acteurs = Acteur::where('id',$id)->first();
        return view('Dashboard.acteur.acteur_modifier',['acteur'=>$acteurs]);
    }

    public function update(Request $request, $id){
        $nom = $request['nom'];
        $prenom = $request['prenom'];
        $email = $request['email'];
        $telephone = $request['telephone'];
        $profession = $request['profession'];


       
       
       
         $acteurs = Acteur::find($id);
         $acteurs->nom = $nom;
         $acteurs->prenom =$prenom;
         $acteurs->email = $email;
         $acteurs->telephone = $telephone;
         $acteurs->profession = $profession;
         $acteurs->update();
         
         return redirect('acteur_liste');
      }
 
      public function destroy($id) {

        Acteur::find($id)->delete();
        
        return redirect()->back();
    }

}
