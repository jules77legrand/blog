<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    public function index()
    {
        return view('/Professeur/element');
    }
    public function show()
    {
        return view('/Professeur/element');
    }
}
