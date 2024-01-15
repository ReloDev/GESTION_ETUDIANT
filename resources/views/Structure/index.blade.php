@extends('layout')
@section('content')

<div class="container p-5">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nom</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($structures as $structure)
        <tr>
            <td scope="col">{{ $structure->id }}</td>
            <td scope="col">{{ $structure->nom }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection