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
            
            <div class="d-flex align-items-center justify-content-between">
            <h1>Willkommen {{$user->name}} (Admin)</h1>

            <div class="d-flex flex-column align-items-center ml-3">
                <div style="height:60px;width:60px;background:url('https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');border-radius:50%;margin:0;background-size:cover;"></div>
            </div>
            </div>
        </div>

    </div>
    @if($user->AUGMToken==0)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Achtung!</strong> Bestehe deinen AUGM Test, dannach kannst du anfangen zu arbeiten!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Achtung!</strong> Du sollst nicht mehr als 8 Stunden arbeiten !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>


    <div>
    <div class="row mt-5">

        <div class="col-md-8">
            @if($user->AUGMToken==1)
            <div class="row">
                    <div class="col-md-5 m-1">
                        
                        <form method="POST" action="/arbeitsplan">
                            <div class="form-group row flex-column">
                                <label for="staticEmail" class="col-form-label">Arbeitstag starten?</label>
                                <button type="submit" class="btn btn-primary"> Starten </button>
                                <button type="submit" class="btn btn-danger mt-2" > Beenden </button>
                            </div> 
                        </form>

                    </div>

                    <div class="col-md-5 m-1">
                        
                        <form method="POST" action="/arbeitsplan">
                            <div class="form-group row flex-column">
                                <label for="staticEmail" class="col-form-label">Pause starten?</label>
                                <button type="submit" class="btn btn-primary"> Starten </button>
                                <button type="submit" class="btn btn-danger mt-2"> Beenden </button>
                            </div> 
                        </form>

                    </div>


            @else

                    <div class="row">
                        <div class="col-md-5 m-1">

                            <form method="POST" action="/AUGM">
                                <div class="form-group row flex-column">
                                    <button type="submit" class="btn btn-danger mt-2" > AUGM Test starten </button>
                                </div>
                            </form>
                    </div>

            @endif
            </div>
            <div class="row mt-3">
                <div class="col-md-12   ">
                        <table class="table table-hover table-dark">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Aktivität</th>
                              <th scope="col">Uhrzeit</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Arbeitstag Beginn</td>
                              <td>04:00 Uhr 03.05.2019</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Frühstückspause Beginn</td>
                              <td>08:00 Uhr 03.05.2019</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Frühstückspause Ende</td>
                              <td>08:30 Uhr 3.05.2019</td>
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <td>Mittagspause Beginn</td>
                              <td>11:30 Uhr 03.05.2019</td>
                            </tr>
                            <tr>
                              <th scope="row">5</th>
                              <td>Mittagspause Ende</td>
                              <td>12:00 Uhr 3.05.2019</td>
                            </tr>
                            <tr>
                              <th scope="row">5</th>
                              <td>Arbeitstag Ende</td>
                              <td>14:00 Uhr 3.05.2019</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
            </div>

        </div>

        <div class="col-md-1" style="border-right:1px solid #cccccc">

        </div>

        <div class="col-md-3 d-flex flex-column justify-content-left">
            <div class="d-flex flex-column align-items-center mt-3">
                <div style="height:60px;width:60px;background:url('https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');border-radius:50%;margin:0;background-size:cover;"></div>
                <h6 class="mt-1"><a href="#">Harald Schöner</a></h6>
            </div>

            <div class="d-flex flex-column align-items-center mt-3">
                <div style="height:60px;width:60px;background:url('https://images.pexels.com/photos/2169434/pexels-photo-2169434.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');border-radius:50%;margin:0;background-size:cover;"></div>
                <h6 class="mt-1"><a href="#">Laura Meyer</a></h6>
            </div>

            <div class="d-flex flex-column align-items-center mt-3">
                <div style="height:60px;width:60px;background:url('https://images.pexels.com/photos/2128807/pexels-photo-2128807.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');border-radius:50%;margin:0;background-size:cover;"></div>
                <h6 class="mt-1"><a href="#">Harald Schöner</a></h6>
            </div>

            <div class="d-flex flex-column align-items-center mt-3">
                <div style="height:60px;width:60px;background:url('https://images.pexels.com/photos/555790/pexels-photo-555790.png?auto=compress&cs=tinysrgb&dpr=1&w=500');border-radius:50%;margin:0;background-size:cover;"></div>
                <h6 class="mt-1"><a href="#">Johann Schröder</a></h6>
            </div>

            <div class="d-flex flex-column align-items-center mt-3">
                <div style="height:60px;width:60px;background:url('https://images.pexels.com/photos/372042/pexels-photo-372042.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');border-radius:50%;margin:0;background-size:cover;"></div>
                <h6 class="mt-1"><a href="#">Aylin Schäfer</a></h6>
            </div>
        </div>

    </div>
                    
    </div>


       

</div>
@endsection
