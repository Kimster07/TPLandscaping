@extends('layouts.app')

@section('content')

<!--auth for booking page--><!--NO ACCESS TO GUEST USER-->
@if (Auth::guest())
    <h2 align="center">You are not logged in!</h2>
    <h3 align="center">Please login to book an appointment.</h3>
@else


    <div class="container-fluid">

        <br><h2 align="center"> Your Appointments</h2><br>

    </div>

    <!--Appointments List in Table Form-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <table class="table table-borderless table-hover table-light">
                    <thead class="thead-dark">
                        <tr>
                            <th>Booking ID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Zipcode</th>
                            <th>Service</th>
                            <th>Options</th>
                        </tr>

                        <tbody>
                        @foreach ($apponntments as $data)
                            <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->time}}</td>
                            <td>{{$data->Address}}</td>
                            <td>{{$data->City}}</td>
                            <td>{{$data->Zip}}</td>
                            <td>{{$data->type}}</td>
                            <td>
                            
                                <!--Edit option-->
                                <a type="button"class="btn btn-info btn-sm" href="{{url('edit').'/'.$data->id}}" >Edit</a>
                                <!--Delete option-->
                                <a class="btn btn-primary btn-sm" href="{{url('delete').'/'.$data->id}}" onclick="return confirm('Are you sure?')">
                                <i class="glyphicon glyphicon-trash"></i>delete</button>
                            
                            </td>
                                
                            </tr>
                        @endforeach
                            
                        </tbody>
                    </thead>
                </table>

            </div>
        </div>
    </div>




@endif



@endsection