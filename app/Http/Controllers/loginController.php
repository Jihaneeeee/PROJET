<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('login') ; 
       }
       public function login(Request $request){
        $login=$request->email;
        $password=$request->password;
        $credentials=["email"=>$login,"password"=>$password];
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('profile')->with('success', 'Bienvenue dans votre compte ');
            //connecte
        }else{
            return back()->withErrors([
                'email'=>'Email ou mot de passe incorrect.'
            ])->onlyInput('email');

        }



}
}