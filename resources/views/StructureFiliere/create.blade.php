@extends('layout')
@section('content')

<div class="container justify-content-center m-5 p-5">

    <form class="form-block-3 justify-content-center m-5 p-5 col-10" data-aos="fade-up" method="POST" action=" {{route('StructureFiliere.store')}}" >
        @csrf
        <div class="row >
            <label for="yourUsername" class="form-label">Sélectionner la filiere</label>  
           <select name="id_filiere" id="s1"  class="pt-2 pb-2 form-select form-select-sm">
              @foreach ($filieres as $filiere )
                <option class="col-12 " value="{{ $filiere->id }}" >
                     {{$filiere->name}}
                </option>
              @endforeach  
           </select>
        </div><br>
        <div class="row ">
            <label for="yourUsername" class="form-label">Sélectionner la structure</label>  
           <select name="id_structure" id="s1"  class="pt-2 pb-2 form-select form-select-sm">
              @foreach ($structures as $structure )
                <option class="col-12 " value="{{ $structure->id }}" >
                     {{$structure->nom}}
                </option>
              @endforeach  
            </select>
        </div><br>

        <div class="d-flex justify-content-center mb-3">
            <div class="submit-field">
                <a href="#" class="btn back-btn shadow-sm"><i class="bi bi-arrow-left"></i> Retour</a>
                <input type="submit" class="btn btn-secondary" value="Soumettre">
            </div>
        </div>

    
    </form>


@endsection
