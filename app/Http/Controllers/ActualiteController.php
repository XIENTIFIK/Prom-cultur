<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;

class ActualiteController extends Controller
{
    // public function create(){
    //     return view('Dashboard.actualite.form_actualite');

    // }

    public function create(){
        return view('one-music-gh-pages.event');

    }
    public function store(Request $request){
      
        // $titre = $request['titre'];
        // $contenu = $request['contenu'];
        // $photo = $request['photo'];
       
        $actualites = new Actualite([
            'titre'=> $request->get('titre'),
            'contenu'=> $request->get('contenu'),
            // $image='photo'=>$request('photo')->store('public/images');
            $image='photo' => $request->photo->store('public/images'),
        ]);
        //  dd($acteurs);
        // $acteurs->titre = $titre;
        // $acteurs->contenu = $contenu;
        // $image= $photo->$request('photo')->store('public/ima.ges');
        $actualites->save();


        return redirect('actualite_liste');
        
    }
    public function liste() {
        $actualites= Actualite::all();
 
        return view('Dashboard.actualite.actualite_liste',[
             'actualites'=>$actualites 
 
        ]);
    }
    public function show($id){
        $actualites = Actualite::where('id' ,$id)->first();
        return view('Dashboard.actualite.actualite_details' , ['actualite'=> $actualites]);
    }

    public function edit($id){
        $actualites = Actualite::where('id',$id)->first();
        return view('Dashboard.actualite.actualite_modifier',['actualite'=>$actualites]);
    }

    public function update(Request $request, $id){
        $titre = $request['titre'];
        $contenu = $request['contenu'];
        // $email = $request['email'];
        // $telephone = $request['telephone'];
        // $profession = $request['profession'];

        
        $actualites = Actualite::find($id);
        $actualites->titre = $titre;
        $actualites->contenu =$contenu;
        // $acteurs->email = $email;
        // $acteurs->telephone = $telephone;
        // $acteurs->profession = $profession;
        $actualites->update();
        
        return redirect('actualite_liste');
     }


    
    public function affiche(){
        $actualites = Actualite::all();
        return view('actualite',compact('actualites'));
    }

    public function destroy($id) {

        Actualite::find($id)->delete();
        
        return redirect()->back();
    }

}
