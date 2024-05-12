<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function index(){
       
            // Récupérer l'utilisateur connecté
            $user = Auth::user();
    
            // Vérifier si un utilisateur est authentifié
            if ($user) {
                // Retourner la vue du profil avec les données de l'utilisateur
                return view('profile', compact('user'));
            } else {
                // Rediriger vers la page de connexion si aucun utilisateur n'est connecté
                return redirect()->route('login')->with('error', 'Vous devez vous connecter pour accéder à votre profil.');
            }
        }
}
