@extends('layout')
@section('contenu_page')

<p><button type="button"><a href="{{route('etudiant_create')}}">Ajouter</a></button></p>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">Telephone</th>
      <th scope="col">E-mail</th>
      <th scope="col">Niveau de l'etudiant</th>
    </tr>
  </thead>
  <tbody>
  @foreach($etudiants as $etudiant)
    <tr>
      <th scope="row">{{$etudiant->id}}</th>
      <td>{{$etudiant->prenom}}</td>
      <td>{{$etudiant->nom}}</td>
      <td>{{$etudiant->telephone}}</td>
      <td>{{$etudiant->email}}</td>
      <td>{{$etudiant->niveauEtu}}</td>
      <td>
      <p><a href="{{route('editer_etudiant',['id'=>$etudiant->id])}}">Editer</a></p>
      </td>
      
      
      <form action="etudiant/{{$etudiant->id}}" method="post">
               @csrf
               @method('delete')
        <td><p><input type="submit" class="btn btn-danger" name="delete" value="Supprimer"></p></td> 
           </form>

    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection