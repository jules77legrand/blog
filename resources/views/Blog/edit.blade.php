
@extends(Layouts.)


@section('contenu_page')

<form action="{{route('student.update',['id'=>$student->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="nom" class="form-control" placeholder="le nom " value="{{$student->name}}"></div>
   <div><input type="text" name="prenom" class="form-control" placeholder="Le prenom" value="{{$student->name}}"> </div>
   <div><input type="text" name="lieu de naissance" class="form-control" placeholder="lieu de naissance" value="{{$student->name}}"></div>
   <div><input type="text" name="date naissance" class="form-control" placeholder="date de naissance " value="{{$student->name}}"></div>


   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
@endsection
