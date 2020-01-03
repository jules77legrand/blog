@extends('layout')
@section('contenu_page')
  <div class="container">
       <div><h1>{{__('Enregistrement d\'un etudiant')}}</h1></div>
       <div class="container">
           <form action="{{route('etudiant.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="firtname" class="form-control" placeholder="le prenom etudiant">
               </div>
               <div>
                   <input type="text" name="name" class="form-control" placeholder="Le nom etudiant">
               </div>
               <div>
                   <input type="text" name="number" class="form-control" placeholder="Le telephone etudiant">
               </div>
               <div>
                   <input type="text" name="E-mail" class="form-control" placeholder="L'email etudiant">
               </div>
               <div>
                   <textarea name="level" id="niveau" cols="30" rows="10" class="form-control" placeholder="Le niveau de l'etudiant"></textarea>
               </div>

               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>

           <div>
   <select name="level_id" id="niveau_id" class="form-control">
       <option value=""></option>
       
       @foreach($niveau as $key => $value)
           <option value="{{$key}}">{{$value}}</option>
       @endforeach
   </select>
</div>

@endsection
