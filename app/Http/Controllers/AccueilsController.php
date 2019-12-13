<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilsController extends Controller
{
    public function index()
    {
        return view('/accueil/index');
    }
}
