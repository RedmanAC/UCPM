@extends('layouts.app')

@section('content')
    <script>
        function add_regal(){
            var table = document.getElementById("regaletable");
            var row = table.insertRow();
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var c2 =document.getElementById("regalname").value;
            var c3 =document.getElementById("regalkap").value
            //var lastRow = table.rows[table.rows.length - 1];
            cell1.innerHTML = "";//lastRow.toString();
            cell2.innerHTML = c2
            cell3.innerHTML = c3;

        }
    </script>
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="d-flex align-items-center justify-content-between">
                    <h1>Willkommen in der Regalübersicht, {{$user->name}} </h1>

                    <div class="d-flex flex-column align-items-center ml-3">
                        <div style="height:60px;width:60px;background:url('https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');border-radius:50%;margin:0;background-size:cover;"></div>
                    </div>
                </div>
            </div>

        </div>

        <div>
            <div class="row mt-5">

                <div class="col-md-8">

                        <div class="row">

                            <div class="col-md-5 m-1">



                                    <div class="form-group row flex-column">
                                        <label class="col-form-label">Regalname: </label>
                                       <label class="col-form-label">Kapazität:  </label>
                                        <button  onclick="add_regal()" class="btn btn-success mt-2" > Regal hinzufügen </button>
                                    </div>



                            </div>

                            <div class="col-md-5 m-1">


                                    <div class="form-group row flex-column">
                                        <input id="regalname" type="text" class="form-text">
                                        <input id="regalkap" type="text" class="form-text">
                                    </div>


                            </div>



                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12   ">
                                        <table id="regaletable" class="table table-hover table-dark">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Regalname</th>
                                                <th scope="col">Kapazität</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Fidget Spinner</td>
                                                <td>6000</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Sonstige</td>
                                                <td>15000</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                        </div>

                        <div class="col-md-1" style="border-right:1px solid #cccccc">

                        </div>



                </div>

            </div>




        </div>
@endsection
