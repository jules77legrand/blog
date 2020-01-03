@extends('layout')
@section('contenu_page')
  <div class="container">
       <div><h1>{{__('Enregistrement d\'une filiere')}}</h1></div>
       <div class="container">
           <form action="{{route('filiere.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="name" class="form-control" placeholder="le nom de la filiere">
               </div>
               <div>
                   <input type="text" name="cost" class="form-control" placeholder="Le cout de la filiere par annee">
               </div>
               <div>
                   <textarea name="categories" id="categories" cols="30" rows="10" class="form-control" placeholder="La categorie"></textarea>
               </div>

               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>

           <div>
   <select name="nom_categorie" id="category_id" class="form-control">
       <option value=""></option>
       
       @foreach($categories as $key => $value)
           <option value="{{$key}}">{{$value}}</option>
       @endforeach
   </select>
</div>

@endsection
