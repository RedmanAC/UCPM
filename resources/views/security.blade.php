@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

         
        </div>

    </div>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Achtung!</strong> Das Lager muss innerhalb von 2 Tagen geprüft werden !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    


    <div>
        <div class="row mt-5">

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-5 m-1">

                        <form method="POST" action="/arbeitsplan">
                            <div class="form-group row flex-column">
                                <label for="staticEmail" class="col-form-label">Lagersicherheitsprüfung ...</label>
                                <button type="submit" class="btn btn-primary"> Eintragen</button>
                            
                            </div>
                        </form>

                    </div>

                   

                </div>
                <div class="row mt-3">
                    <div class="col-md-12   ">
                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Aktivität</th>
                                    <th scope="col">Mitarbeiter</th>
                                    <th scope="col">Uhrzeit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Lagersicherheitsprüfung</td>
                                    <td>Calvin</td>
                                    <td>04:00 Uhr 11.05.2019</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Lagersicherheitsprüfung</td>
                                    <td>Toni</td>
                                    <td>04:00 Uhr 03.05.2019</td>
                                </tr><tr>
                                    <th scope="row">1</th>
                                    <td>Lagersicherheitsprüfung</td>
                                    <td>Ali</td>
                                    <td>04:00 Uhr 28.04.2019</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Lagersicherheitsprüfung</td>
                                    <td>Patrick</td>
                                    <td>04:00 Uhr 20.04.2019</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

         
        </div>

    </div>




</div>
@endsection
