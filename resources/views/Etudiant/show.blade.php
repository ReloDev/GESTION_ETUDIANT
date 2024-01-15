@extends('layout')
@section('content')

{{-- <div class="container py-3">
    <form class="d-flex justify-content-start w-25" method="post" action="{{route('Etudiant.filiere',['id'=>$filiere->id])}}">
        @csrf
        <select class="form-select" name="filiere">
          @foreach ($filieres as $filiere)
          <option value="{{$filiere->id}} ">{{$filiere->name}}</option>
          @endforeach
        </select>
        <input class="btn btn-primary ms-3" value="Soumettre" type="submit">
      </form>
</div> --}}
{{-- <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
    @foreach ($filieres as $filiere)
    <option value=" {{$filiere->id}} ">
        <a href=" {{route('Etudiant.filiere',['id'=>$filiere->id]')}} ">   
            {{$filiere->name}}
        </a>
    </option>
    @endforeach
</select> --}}
@foreach ($etudiants as $etudiant)
    
@endforeach
<ul class="nav nav-tabs m-5">
   <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle fs-3" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Filiere</a>
      <ul class="dropdown-menu">
        @foreach ($filieres as $filiere)
        <form method="post" action="{{ route('Etudiant.filiere', [ 'id' => $filiere->id]) }}">
            @csrf
            <button class="dropdown-item" type="submit">{{$filiere->name}}</button>
          </form>
        @endforeach
      </ul>
    </li>
    </ul>

 {{-- <div class="container p-5">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Matricule</th>
        <th scope="col">Filiere</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($etudiants as $etudiant)
        <tr>
            <td scope="col">{{ $etudiant->id }}</td>
            <td scope="col">{{ $etudiant->nom }}</td>
            <td scope="col">{{ $etudiant->prenom }}</td>
            <td scope="col">{{ $etudiant->matricule }}</td>
            <td scope="col">{{ $etudiant->filieres->name }}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>  --}}

@endsection