<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{
    public function create(){
        return view('Dashboard.album.form_album');

    }
    public function store(Request $request){
      
        // $titre = $request['titre'];
        // $contenu = $request['contenu'];
        // $photo = $request['photo'];
       
        $album = new Album([
            'nom'=> $request->get('nom'),
            'titre'=> $request->get('titre'),
            'date'=> $request->get('date'),
            // $image='photo'=>$request('photo')->store('public/images');
            $image='photo' => $request->photo->store('public/images'),
        ]);
        //  dd($acteurs);
        // $acteurs->titre = $titre;
        // $acteurs->contenu = $contenu;
        // $image= $photo->$request('photo')->store('public/ima.ges');
        $album->save();


        return redirect('album_liste');
        
    }
    public function liste() {
        $albums= Album::all();
        return view('Dashboard.album.album_liste',[
             'albums'=>$albums
 
        ]);
    }
    public function show($id){
        $albums = Album::where('id' ,$id)->first();
        return view('Dashboard.album.album_details' , ['album'=> $albums]);
    }

    public function edit($id){
        $albums = Album::where('id',$id)->first();
        return view('Dashboard.album.album_modifier',['album'=>$albums]);
    }

    public function update(Request $request, $id){
        $nom = $request['nom'];
        $titre = $request['titre'];
        $date = $request['date'];
        // $email = $request['email'];
        // $telephone = $request['telephone'];
        // $profession = $request['profession'];

        
        $albums = Album::find($id);
        $albums->nom = $nom;
        $albums->titre = $titre;
        $albums->date =$date;
        // $acteurs->email = $email;
        // $acteurs->telephone = $telephone;
        // $acteurs->profession = $profession;
        $albums->update();
        
        return redirect('album_liste');
     }


    
    public function affiche(){
        $albums = Album::all();
        return view('pages.album',compact('albums'));
    }

    public function destroy($id) {

        Actualite::find($id)->delete();
        
        return redirect()->back();
    }
}
