@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <h1>Produkte/Lager</h1>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 m-1">

                        <div class="pos-f-t">
                            <div class="collapse" id="navbarToggleExternalContent">
                                <div class="mb-5">
                                    <form method="POST" action="/produkte">
                                        {{csrf_field()}}
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Name</label>
                                                <input name="name" type="text" class="form-control" id="inputEmail4"
                                                       placeholder="Name">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputState">Größe</label>
                                                <select name="größe" id="inputState" class="form-control">
                                                    <option selected>Groß</option>
                                                    <option>Mittel</option>
                                                    <option>Klein</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="inputPassword4">Anzahl</label>
                                                <input name="anzahl" type="number" class="form-control"
                                                       id="inputPassword4" placeholder="Anzahl">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputAddress">Artikelnummer</label>
                                                <input name="artikelnummer" type="text" class="form-control" id="inputAddress"
                                                       placeholder="Artikelnummer">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputAddress2">Barcode</label>
                                                <input name="barcode" type="text" class="form-control" id="inputAddress2"
                                                       placeholder="Barcode">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">Regal</label>
                                                <input name="regal" type="text" class="form-control" id="inputCity" placeholder="R1.1">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputZip">Preis</label>
                                                <input name="preis" type="text" class="form-control" id="inputZip" placeholder="19,99€">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-block btn-outline-success">Hinzufügen</button>
                                    </form>

                                </div>
                            </div>
                            <nav class="navbar">
                                <button class="btn btn-primary" type="button" data-toggle="collapse"
                                        data-target="#navbarToggleExternalContent"
                                        aria-controls="navbarToggleExternalContent" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    Produkt hinzufügen
                                </button>
                            </nav>
                        </div>

                    </div>


                </div>

                <div class="row">

                    <div class="col-md-12">

                        <table class="table table-hover table-dark">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Größe</th>
                                <th scope="col">Anzahl</th>
                                <th scope="col">Artikelnummer</th>
                                <th scope="col">Barcode</th>
                                <th scope="col">Regal</th>
                                <th scope="col">Preis</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)

                                <tr>

                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->größe}}</td>
                                    <td>{{$product->anzahl}}</td>
                                    <td>{{$product->artikelnummer}}</td>
                                    <td>{{$product->barcode}}</td>
                                    <td>{{$product->regal}}</td>
                                    <td>{{$product->preis}} €</td>
                                    <td><div class="btn btn-outline-primary">Bearbeiten</div></td>
                                    <td>
                                        <form method="POST" action="/produkte/{{$product->id}}">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}

                                            <button type="submit" class="btn btn-outline-danger">Löschen</button>
                                        </form>
                                    </td>

                                </tr>

                            @endforeach
                            {{ $products->links() }}


                            </tbody>
                        </table>


                    </div>

                </div>


            </div>

        </div>

    </div>

@endsection
