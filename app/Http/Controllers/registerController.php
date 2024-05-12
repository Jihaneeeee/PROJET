<?php

namespace App\Http\Controllers;

use App\Http\Requests\InscriptionRequest;
use App\models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index(){
        return view('register') ; 
       }
       public function store(InscriptionRequest $request){
       // $name =$request->name;
        //$jc=$request->jc ;
       // $email =$request->email;
        //$tel =$request->tel;
        //$ville =$request->ville;
        //$password=$request->password; 
            //validation
            $formfields=$request->validated();
        //'name' => 'required|min:3',
        //'email' => 'required|email|unique:Inscriptions',
        //'password'=>'required|min:8|max:40|confirmed',
        //'jc'=>'required',
        //'tel'=>'required',
        //'ville'=>'required',
    //]);
          //Hash
    $password=$request->password;
    $formfields['password']=Hash::make($password);
      
        // insertion
        Inscription::create($formfields);
        //([
       // 'name'=>$name,
        //'jc'=>$jc,
        //'email'=>$email,
        //'tel'=> $tel,
        //'ville'=>$ville,
        //'password'=>$password,
   // ]);
     // Redirection après inscription réussie
     return redirect('/login')->with('success', 'Inscription réussie! Connectez-vous maintenant.');

}

}