@extends('layouts.app')

@section('content')
    <script>
        var cnt = 0;
        function add(){
            cnt++;
            if(cnt==4)
            {

            }

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
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>FAILED!</strong> BITTE RICHTIGEN CODE EINGEBEN
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="d-flex align-items-center justify-content-between">
                    <h1>Bitte geben Sie den Sicherheitscode ein: </h1>

                    <div class="d-flex flex-column align-items-center ml-3">
                        <div style="height:60px;width:60px;background:url('https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');border-radius:50%;margin:0;background-size:cover;"></div>
                    </div>
                </div>
            </div>

        </div>

        <div>
            <div class="row mt-5">


                <div class="col-md-8">

                    <div class="row mt-3">
                        <div class="col-md-12   ">
                            <table id="safetytable" class="table table-hover table-dark">
                                <tbody>
                                <tr>
                                    <td scope="row"><button  onclick="add()" class="btn btn-success mt-2" > 1</button></td>
                                    <td scope="row"><button  onclick="add()" class="btn btn-success mt-2" > 2</button></td>
                                    <td scope="row"><button  onclick="add()" class="btn btn-success mt-2" > 3</button></td>
                                </tr>


                                <tr>
                                    <td scope="row"><button  onclick="add()" class="btn btn-success mt-2" > 4</button></td>
                                    <td scope="row"><button  onclick="add()" class="btn btn-success mt-2" > 5</button></td>
                                    <td scope="row"><button  onclick="add()" class="btn btn-success mt-2" > 6</button></td>
                                </tr>
                                <tr>
                                    <td scope="row"><button  onclick="add()" class="btn btn-success mt-2" > 7</button></td>
                                    <td scope="row"><button  onclick="add()" class="btn btn-success mt-2" > 8</button></td>
                                    <td scope="row"><button  onclick="add()" class="btn btn-success mt-2" > 9</button></td>
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
