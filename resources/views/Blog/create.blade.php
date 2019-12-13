@extends('layout.')
@section('contenu_page')

    <div class="container">
       <div><h1>{{__('Enregistrement d\'un etudiant')}}</h1></div>
       <div class="container">
           <form action="{{route('etudiant.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="nom" class="form-control" placeholder="le nom etudiant">
               </div>
               <div>
                   <input type="text" name="prenom" class="form-control" placeholder="Le prenom etudiant">
               </div>
               <div>
                   <input type="text" name="lieu de naissance" class="form-control" placeholder="Lieu de naissance">
               </div>
               <div>
                   <input type="text" name="date de naissance" class="form-control" placeholder="date de naissance">
               </div>

                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>
@endsection
