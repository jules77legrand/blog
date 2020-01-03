<?php

namespace App\Http\Controllers;
use App\etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $etudiants = \App\etudiant::orderBy('id', 'DESC')->get();
        return view('Blog.etudiant', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         
        $niveau = \App\niveau::pluck('id');       
      return view('Blog.create',compact('niveau'));
     

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etudiant = new \App\etudiant();
        $etudiant->prenom = $request->input('firtname');
        $etudiant->nom = $request->input('name');
        $etudiant->telephone = $request->input('number');
        $etudiant->email= $request->input('E-mail');
        $etudiant->niveauEtu = $request->input('level');
        $etudiant->save();        
        return redirect('/etudiant');
     
     
     
     
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
       
        $etudiant = \App\etudiant::find($id);
        $niveau = \App\niveau::pluck('licence1','licence2','licence3','master1','master2','id');

   return view('Blog.edit', compact('etudiant','niveau'));


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
       
        $etudiant = \App\etudiant::find($id);
        if($etudiant){
            //dd($request->input('name'));
            $etudiant->update([
                'prenom' => $request->input('firtname'),
                'nom' => $request->input('name'),
                'telephone' => $request->input('number'),
                'email' => $request->input('E-mail'),
                'niveauEtu' => $request->input('level'),
                
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
        $etudiant = \App\etudiant::find($id);
   if($etudiant)
       $etudiant->delete();
   return redirect()->route('etudiant');

     }
     
    
}
