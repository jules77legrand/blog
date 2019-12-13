
@extends('layout.')
@section('contenu_page')

<table class="table table-striped">
       <tr>
           <th>#</th>          <th>Nom</th>           <th>prenom</th>       <th>lieu de naissance</th>    <th>date de naissance</th>
       </tr>
       @foreach($students $student)
           <tr>
               <th>#</th>
               <th>{{$student->nom}}</th>
               <th>{{$student->prenom}}}</th>
               <th>{{$student->datedenaissance}}}</th>
               <th>{{$student->lieudenaissance}}}</th>
               <th></th>
           </tr>
       @endforeach
   </table>


    @endsection
