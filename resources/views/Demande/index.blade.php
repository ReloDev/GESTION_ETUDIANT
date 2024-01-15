@extends('layout')
@section('content')

<div class="container p-5">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">matricule1</th>
        <th scope="col">email1</th>
        <th scope="col">Matricule2</th>
        <th scope="col">email2</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($demandes as $demande)
        <tr>
            <td scope="col">{{ $demande->id }}</td>
            <td scope="col">{{ $demande->matricule1 }}</td>
            <td scope="col">{{ $demande->email1 }}</td>
            <td scope="col">{{ $demande->matricule2 }}</td>
            <td scope="col">{{ $demande->email2 }}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection