<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact ;

class ContactController extends Controller
{
    public function index()
    {
        return view('/Contact/adresse');
    }
    public function show()
    {
        return view('/Contact/adresse');
    }

   


}
