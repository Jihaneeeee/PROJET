<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use Illuminate\Http\Request;

class publierController extends Controller
{
    public function index(){
        return view('publier') ; 
       }
       public function store(Request $request){
        $modele =$request->modele;
        $prix=$request->prix ;
        $kilometrage =$request->kilometrage;
        $location =$request->location;
        $image =$request->image;
         
            //validation
        $request->validate([
        'modele' => 'required'
    ]);
   
        // insertion
        Annonce::create([
        'modele'=>$modele,
        'prix'=>$prix,
        'kilometrage'=>$kilometrage,
        'location'=> $location,
        'image' => $image,
        
    ]);
     // Redirection après inscription réussie
     return redirect('/Annonces')->with('success', 'Annonce publiée avec succès!');

}

}
