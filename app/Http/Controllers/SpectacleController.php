<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spectacle;


class SpectacleController extends Controller
{
    public function create(){
        return view('Dashboard.spectacle .spectacle.form_spectacle');

    }
    public function store(Request $request){
       
        $spectacles = new Spectacle([
            'titre'=> $request->get('titre'),
            'contenu'=> $request->get('contenu'),
            // $image='photo'=>$request('photo')->store('public/images');
            $image='photo' => $request->photo->store('public/images'),
        ]);
        $spectacles->save();


        return redirect('spectacle_liste');
        
    }
    public function liste() {
        $spectacles= Spectacle::all();
 
        return view('Dashboard.spectacle .spectacle_liste',[
             'spectacles'=>$spectacles 
 
        ]);
    }
    public function show($id){
        $spectacles = Spectacle::where('id' ,$id)->first();
        return view('Dashboard.spectacle .spectacle_details' , ['spectacle'=> $spectacles]);
    }

    public function edit($id){
        $spectacles = Spectacle::where('id',$id)->first();
        return view('Dashboard.spectacle .spectacle_modifier',['spectacle'=>$spectacles]);
    }

    public function update(Request $request, $id){
        $titre = $request['titre'];
        $contenu = $request['contenu'];
        // $email = $request['email'];
        // $telephone = $request['telephone'];
        // $profession = $request['profession'];

        
        $spectacles = Spectacle::find($id);
        $spectacles->titre = $titre;
        $spectacles->contenu =$contenu;
        // $acteurs->email = $email;
        // $acteurs->telephone = $telephone;
        // $acteurs->profession = $profession;
        $spectacles->update();
        
        return redirect('spectacle_liste');
     }


    
    public function affiche(){
        $spectacles = Spectacle::all();
        return view('welcome',compact('spectacles'));
    }

    public function destroy($id) {

        Spectacle::find($id)->delete();
        
        return redirect()->back();
    }
}
