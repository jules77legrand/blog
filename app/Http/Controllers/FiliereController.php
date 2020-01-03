<?php

namespace App\Http\Controllers;

use App\Filiere;

use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $filieres = \App\filiere::orderBy('id', 'DESC')->get();
        return view('formation.filiere', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         
        $categories = \App\categories::pluck('nom_categorie','id');       
      return view('formation.create',compact('categories'));
     

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filiere = new \App\filiere();
        $filiere->nom_filiere = $request->input('name');
        $filiere->cout_filiere = $request->input('cost');
        $filiere->categories = $request->input('categories');
        $filiere->save();        
        return redirect('/filiere');
     
     
     
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $filiere = \App\filiere::find($id);//on recupere la filiere
        $categories = \App\categories::pluck('nom_categorie','id');

   return view('formation.edit', compact('filiere','categories'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $filiere = \App\filiere::find($id);
        if($filiere){
            //dd($request->input('name'));
            $filiere->update([
                'nom_filiere' => $request->input('name'),
                'cout_filiere' => $request->input('cost'),
                'categories' => $request->input('category'),
                //'category_id' => $request->input('category_id'),
            ]);
        }
        return redirect()->back();
     


     }
     

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filiere = \App\filiere::find($id);
   if($filiere)
       $filiere->delete();
   return redirect()->route('filiere');

     }
     
    
}
