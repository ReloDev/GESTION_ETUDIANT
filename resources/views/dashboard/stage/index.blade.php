@extends('layout')
@section('content')
    <main class="d-flex flex-column justify-content-between vh-100">
        <header>
            Header
        </header>
        <section class="container">
            <form class="d-flex flex-row justify-content-start">
                <select class="form-select w-25">
                    <option>Selectinnez une filière</option>
                    <option>Informatique de Gestion</option>
                </select>
                <input type="submit" class="ms-3 btn btn-primary" value="Soumettre">
            </form>
        </section>
            
        <section>
            <!-- Si une filière a été sélectionné -->
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenoms</th>
                                <th scope="col">email</th>
                                <th scope="col">binome/monome</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ayena</td>
                                <td>Aurel Onésime</td>
                                <td>
                                    yaonesimrel@gmail.com
                                </td>
                                <td>
                                    binome
                                </td>
                                <td>
                                    <a href="demande_treat.html" class="text-primary text-decoration-none">voir</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Sovide</td>
                                <td>Canisius Ronald Phesthus</td>
                                <td>
                                    sovidecanisius@gmail.com
                                </td>
                                <td>
                                    monome
                                </td>
                                <td>
                                    <a href="demande_treat.html" class="text-primary text-decoration-none">voir</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Si une filière n'a pas été selectionnée -->
            <div class="container d-flex justify-content-center align-items-center">
                <span class="text-muted">selectionnez une filière</span>
            </div>
        </section>
        
        <footer>
            Footer
        </footer>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
@endsection