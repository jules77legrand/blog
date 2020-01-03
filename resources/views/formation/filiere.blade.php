@extends('layout')
@section('contenu_page')

<h1>Nos formations et tarifs</h1>
<p><button type="button"><a href="{{route('filiere.create')}}">Ajouter</a></button></p>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom Filiere</th>
      <th scope="col">Coût de la Formation/an</th>
      <th scope="col">Domaine de la formation</th>
    </tr>
  </thead>
  <tbody>
  @foreach($filieres as $fil)
    <tr>
      <th scope="row">{{$fil->id}}</th>
      <td>{{$fil->nom_filiere}}</td>
      <td>{{$fil->cout_filiere}} F</td>
      <td>{{$fil->categories}}</td>
      <td>
      <p><a href="{{route('editer_filiere',['id'=>$fil->id])}}">Editer</a></p>
      </td>
      
      
      <form action="filiere/{{$fil->id}}" method="post">
               @csrf
               @method('delete')
        <td><p><input type="submit" class="btn btn-danger" name="delete" value="Supprimer"></p></td> 
           </form>

    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection