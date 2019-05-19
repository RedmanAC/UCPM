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
                    <h1>Willkommen in der Admin-Übersicht, {{$user->name}}</h1>

                    <div class="d-flex flex-column align-items-center ml-3">
                        <div style="height:60px;width:60px;background:url('https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');border-radius:50%;margin:0;background-size:cover;"></div>
                    </div>
                </div>
            </div>

        </div>


        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Achtung !</strong> Laura Meyer hat mehr als 8 Stunden gearbeitet!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Achtung !</strong> Johann Schröder hat mehr als 8 Stunden gearbeitet!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Achtung !</strong> Aylin Schäfer hat mehr als 8 Stunden gearbeitet!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>


        <div>
            <div class="row mt-5">








                <div class="row-md-3 d-flex flex-column justify-content-left">
                            <div class="d-flex flex-column align-items-center mt-3">
                                <div style="height:60px;width:60px;background:url('https://images.pexels.com/photos/2169434/pexels-photo-2169434.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');border-radius:50%;margin:0;background-size:cover;"></div>
                                <h6 class="mt-1"><a href="#">Laura Meyer</a></h6>
                                <button class="btn btn-danger mt-2" > Abmahnung verschicken</button>
                            </div>
                </div>

                <div class="row-md-3 d-flex flex-column justify-content-left">
                            <div class="d-flex flex-column align-items-center mt-3">
                                <div style="height:60px;width:60px;background:url('https://images.pexels.com/photos/555790/pexels-photo-555790.png?auto=compress&cs=tinysrgb&dpr=1&w=500');border-radius:50%;margin:0;background-size:cover;"></div>
                                <h6 class="mt-1"><a href="#">Johann Schröder</a></h6>
                                <button class="btn btn-danger mt-2" > Abmahnung verschicken </button>
                            </div>
                </div>
                    <div class="row-md-3 d-flex flex-column justify-content-left">
                            <div class="d-flex flex-column align-items-center mt-3">
                                <div style="height:60px;width:60px;background:url('https://images.pexels.com/photos/372042/pexels-photo-372042.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');border-radius:50%;margin:0;background-size:cover;"></div>
                                <h6 class="mt-1"><a href="#">Aylin Schäfer</a></h6>
                                <button class="btn btn-danger mt-2" > Abmahnung verschicken </button>
                            </div>
                        </div>

                </div>

            </div>




        </div>
@endsection
