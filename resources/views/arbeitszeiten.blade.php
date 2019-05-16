@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <h1>Alle Arbeitszeiten/ Aktivitäten</h1>
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-md-8">
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mitarbeiter Nummer</th>
                        <th scope="col">Aktivität</th>
                        <th scope="col">Uhrzeit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($activities != null)
                        @foreach($activities as $activity)

                            <tr>
                                <th scope="row">

                                    <div style="height:35px;width:35px;background:url('https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');border-radius:50%;margin:0;background-size:cover;"></div>

                                </th>
                                <th scope="row"><a
                                            href="/arbeitszeiten/{{$activity->user->id}}">{{$activity->user->name}}</a>
                                </th>
                                <th scope="row">{{$activity->user->id}}</th>
                                <td>{{$activity->activity}}</td>
                                <td>{{$activity->created_at->format('D-m-y-H:i')}}</td>
                            </tr>

                        @endforeach
                      
                    @else
                        No Activities at the moment
                    @endif


                    </tbody>
                </table>
            </div>

            <div class="col-md-1" style="border-right:1px solid #cccccc">

            </div>

            <div class="col-md-3 d-flex flex-column justify-content-left">

              
                

            </div>
        </div>


    </div>

@endsection
