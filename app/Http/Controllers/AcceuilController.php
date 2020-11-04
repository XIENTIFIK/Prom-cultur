<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Actualite;


class AcceuilController extends Controller
{
   
    public function affiche(){
        $actualites = Actualite::all()->take(1);
        $albums = Album::all();
        return view('pages.acceuil',compact('actualites','albums'));
    }
    


}
