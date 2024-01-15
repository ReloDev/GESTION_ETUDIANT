@extends('layout')
@section('content')
<div class="container p-5">
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
</div>


@endsection