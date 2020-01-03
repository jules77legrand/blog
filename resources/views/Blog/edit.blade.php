@extends('layout')
@section('contenu_page')
   <h1>Modifier une etudiant</h1>

<form action="{{route('update_etudiant',['id'=>$etudiant->id])}}
" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="firtname" class="form-control" placeholder="le prenom de l'etudiant" value="{{$etudiant->prenom}}"></div>
   <div><input type="text" name="name" class="form-control" placeholder="Le nom de l'etudiant" value="{{$etudiant->nom 	}}"> </div>
   <div><input type="text" name="number" class="form-control" placeholder="Le telephone de l'etudiant" value="{{$etudiant->telephone}}"> </div>
   <div><input type="text" name="E-mail" class="form-control" placeholder="L'email de l'etudiant" value="{{$etudiant->email 	}}"> </div>
   <div><input type="text" name="level" class="form-control" placeholder="le niveau de l'etudiant" value="{{$etudiant->niveau}}"> </div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
 

<div>
   <select name="level_id" id="niveau_id" class="form-control">
       <option value=""></option>
       @foreach($niveau as $key => $value)
           <option value="{{$key}}" {{ $key == $etudiant->level_id ? 'selected="selected"':''}}>{{$value}}</option>
       @endforeach
   </select>
</div>


@endsection