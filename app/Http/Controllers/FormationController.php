<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
      public function index()
    {
        return view('/formation/liste');
    }
    
    public function show()
    {
        return view('/formation/liste');
    }


    
}


