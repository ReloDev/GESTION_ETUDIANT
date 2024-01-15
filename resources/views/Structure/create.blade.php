@extends('layout')
@section('content')
<div class="d-flex py-2 justify-content-center">
        <div class="titre-form fs-3">
           Ajouter une nouvelle structure
        </div>
    </div>
    <div class="w-100">
       
        
        <form class="form-block-3" data-aos="fade-up" method="POST" action=" {{route('Structure.store')}}" >
            @csrf
            <div class="d-flex justify-content-center mb-1">
                <div class="field-group">
                    <input type="text" required class="input-field" id="binome-matri1" name="nom" placeholder="Nom de la structure">
                    <label class="input-label" for="binome-matri1" name="nom">Structure</label>
                </div>
            </div>
           
            <div class="d-flex justify-content-center mb-3">
                <div class="submit-field">
                    <a href="#" class="btn back-btn shadow-sm"><i class="bi bi-arrow-left"></i> Retour</a>
                    <input type="submit" class="btn btn-secondary" value="Soumettre">
                </div>
            </div>



        </form>
    </div>
@endsection