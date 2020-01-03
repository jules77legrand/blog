@extends('layout')
@section('contenu_page')
   <h1>Modifier une filiere</h1>

<form action="{{route('update_filiere',['id'=>$filiere->id])}}
" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="name" class="form-control" placeholder="le nom de la filiere" value="{{$filiere->nom_filiere}}"></div>
   <div><input type="text" name="cost" class="form-control" placeholder="Le cout de la filiere" value="{{$filiere->cout_filiere 	}}"> </div>
   <div><input type="text" name="category" class="form-control" placeholder="categorie de la filiere" value="{{$filiere->categories}}"> </div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
 

<div>
   <select name="category_id" id="category_id" class="form-control">
       <option value=""></option>
       @foreach($categories as $key => $value)
           <option value="{{$key}}" {{ $key == $filiere->category_id ? 'selected="selected"':''}}>{{$value}}</option>
       @endforeach
   </select>
</div>


@endsection@extends('layout')
@section('contenu_page')
   <h1>Modifier une filiere</h1>

<form action="{{route('update_filiere',['id'=>$filiere->id])}}
" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="name" class="form-control" placeholder="le nom de la filiere" value="{{$filiere->nom_filiere}}"></div>
   <div><input type="text" name="cost" class="form-control" placeholder="Le cout de la filiere" value="{{$filiere->cout_filiere 	}}"> </div>
   <div><input type="text" name="category" class="form-control" placeholder="categorie de la filiere" value="{{$filiere->categories}}"> </div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
 

<div>
   <select name="category_id" id="category_id" class="form-control">
       <option value=""></option>
       @foreach($categories as $key => $value)
           <option value="{{$key}}" {{ $key == $filiere->category_id ? 'selected="selected"':''}}>{{$value}}</option>
       @endforeach
   </select>
</div>


@endsection