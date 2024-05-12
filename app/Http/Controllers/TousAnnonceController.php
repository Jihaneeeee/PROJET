<?php

namespace App\Http\Controllers;
use App\models\Annonce;
use Illuminate\Http\Request;

class TousAnnonceController extends Controller
{
    public function index()
    {
        $annonces= Annonce::all();
        return view('Annonces',compact('annonces'));

}
}
