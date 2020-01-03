<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RechercheController extends Controller

{
    public function index(Request $request)

    {
    $search = $request->input('recherche');
        $recherche = \App\etudiant::where('prenom','%'. $search.'%')->get();

       
        return view('Recherche',compact('recherche'));
    }


}
