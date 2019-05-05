@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <h1>Lager</h1>
        </div>
    </div>

     <div class="row mt-5">

        <div class="col-md-12">
            <div class="row">
                    <div class="col-md-3 m-1">
                        
                        <form method="POST" action="/arbeitsplan">
                            <div class="form-group row flex-column">
                                <button type="submit" class="btn btn-primary">Produkt hinzufügen</button>
                            </div> 
                        </form>

                    </div>

                    <div class="col-md-3 m-1">
                        
                        <form method="POST" action="/arbeitsplan">
                            <div class="form-group row flex-column">
                                <button type="submit" class="btn btn-primary">Produkt bearbeiten  </button>
                            </div> 
                        </form>

                    </div>

                     <div class="col-md-3 m-1">
                        
                        <form method="POST" action="/arbeitsplan">
                            <div class="form-group row flex-column">
                                <button type="submit" class="btn btn-danger">Produkt löschen  </button>
                            </div> 
                        </form>

                    </div>

            </div>
            <div class="row mt-3">
                <div class="col-md-12   ">
                        <table class="table table-hover table-dark">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Artikelnummer</th>
                              <th scope="col">Anzahl</th>
                              <th scope="col">Preis</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Fidget Spinner</td>
                              <td>00001</td>
                              <td>621</td>
                              <td>19,99€</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Luftcouch</td>
                              <td>00002</td>
                              <td>129</td>
                              <td>14,99€</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Akkustaubsauger</td>
                              <td>00003</td>
                              <td>324</td>
                              <td>40,00€</td>
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <td>Kofferwaage</td>
                              <td>00004</td>
                              <td>114</td>
                              <td>4,99€</td>
                            </tr>
                            <tr>
                              <th scope="row">5</th>
                              <td>Xiamoi 20 Watt Wireless Charger</td>
                              <td>00005</td>
                              <td>93</td>
                              <td>14,99€</td>
                            </tr>
                          
                          </tbody>
                        </table>
                    </div>
            </div>

        </div>

      </div>

  </div>

@endsection
