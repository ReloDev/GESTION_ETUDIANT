@extends('layout')
@section('content')
    <main class="d-flex justify-content-center align-items-center vh-100">
        <div class="card w-25 shadow-sm">
            <div class="card-body">
                <div class="fw-bold fs-4">
                    Etudiant 1
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <span class="text-dark fs-5">Nom : </span>
                    </div>
                    <div class="col-md-7">
                        <span>Ayena</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <span class="text-dark fs-5">Prénom(s) : </span>
                    </div>
                    <div class="col-md-7">
                        <span>Aurel Onésime</span>
                    </div>
                </div>
                <div class="fw-bold fs-4">
                    Etudiant 2
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <span class="text-dark fs-5">Nom : </span>
                    </div>
                    <div class="col-md-7">
                        <span>Sovide</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 fs-5">
                        <span>Prénom(s) : </span>
                    </div>
                    <div class="col-md-7">
                        <span>John Doe</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <span class="text-dark fs-5">filière : </span>
                    </div>
                    <div class="col-md-7">
                        <span>IG</span>
                    </div>
                </div>
                <div>
                    <form>
                        <div class="py-2">
                            <select class="form-select">
                                <option>Selectinnez une filière</option>
                                <option>Informatique de Gestion</option>
                            </select>
                        </div>
                        <div class="py-2">
                            <input type="submit" class="btn btn-primary w-100" value="Valider">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
   