@extends('layout')
@section('content')

<div class="container p-5">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">code</th>
        <th scope="col">nom</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($filieres as $filiere)
        <tr>
            <td scope="col">{{ $filiere->id }}</td>
            <td scope="col">{{ $filiere->code }}</td>
            <td scope="col">{{ $filiere->name }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection