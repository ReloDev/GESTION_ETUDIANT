@extends('layout')
@section('content')

<div class="container p-5">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">id_structure_filiere</th>
        <th scope="col">id_structure</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($structure_filieres as $structure_filiere)
        <tr>
            <td scope="col">{{ $structure_filiere->id }}</td>
            <td scope="col">{{ $structure_filiere->id_filiere }}</td>
            <td scope="col">{{ $structure_filiere->id_structure }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection