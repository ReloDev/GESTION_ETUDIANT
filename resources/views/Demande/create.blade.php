@extends('layout')
@section('content')
    <div class="d-flex py-2 justify-content-center">
        <div class="titre-form fs-3">
            Faites votre demande de stage
        </div>
    </div>
    <div class="w-100">
       
        
        <form class="form-block-3" data-aos="fade-up" method="POST" action=" {{route('Demande.store')}}" >
            @csrf
            <div class="d-flex justify-content-center mb-1">
                <div class="field-group">
                    <input type="text" required class="input-field" id="binome-matri1" name="matricule1" placeholder="Matricule 1">
                    <label class="input-label" for="binome-matri1" name="matricule1">Matricule 1</label>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-2">
                <div class="group-notice">
                    <span class="input-notice w-100 text-danger d-none">
                        *Ex: 21189900
                    </span>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <div class="field-group">
                    <input type="email" required class="input-field" id="binome-email1" name="email1" placeholder="Email 1">
                    <label class="input-label" for="monome-email1" name="email1">Email 1</label>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-2">
                <div class="group-notice">
                    <span class="input-notice w-100 text-danger d-none">
                        *Ex: johndoe@gmail.com
                    </span>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <div class="field-group">
                    <input type="text" required class="input-field" id="binome-matri2" name="matricule2" placeholder="Matricule 2 (facultative)">
                    <label class="input-label" for="binome-matri2" name="matricule2">Matricule 2</label>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-2">
                <div class="group-notice">
                    <span class="input-notice w-100 text-danger d-none">
                        *Ex: 21189900
                    </span>
                </div>
            </div>
            
            <div class="d-flex justify-content-center mb-3">
                <div class="field-group">
                    <input type="email" class="input-field" id="binome-email2" name="email2" placeholder="Email 2">
                    <label class="input-label" for="monome-email2" name="email2">Email 2 (facultatif)</label>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-2">
                <div class="group-notice">
                    <span class="input-notice w-100 d-none">

                    </span>
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