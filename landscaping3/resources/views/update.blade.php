@extends('layouts.app')

@section('content')

<!--auth for booking page--><!--NO ACCESS TO GUEST USER-->
@if (Auth::guest())
    <h2 align="center">You are not logged in!</h2>
    <h3 align="center">Please login to book an appointment.</h3>
@else

    <!--Booking Form Layout-->
    <div class="container col-lg-4">
        <div class="card">
            <br>
            <h2 align="center">Update Appointment</h2>
            <div class="card-body">
                <!--Booking Form-->                
                <form  class="px-4 py-3" action ="/updateappointments" method="POST">
                    @csrf

                    <!--for name-->
                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="booking_id" hidden value="{{ $appointment->id }}">
                    <input type="text" class="form-control" name="name" value="{{ $appointment->name }}" required>
                    
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    </div>
                    

                    <div class="row">

                        <!--for date--> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="date">Date</label>

                                <input class="form-control" name="date" id="date" type="date" min="<?php echo date('Y-m-d'); ?>" value="{{ $appointment->date }}" required>
                                <p class="help is-danger">{{ $errors->first('date') }}</p>

                            </div>
                        </div>

                        <!--for time-->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="Time">Time</label>
                        <select class="form-control" name="time" id="time" value="{{ $appointment->time }}" required>
                            <option  selected hidden>{{ $appointment->time }}</option>
                            <option>9 AM</option>
                            <option>10 AM</option>
                            <option>11 AM</option>
                            <option>12 PM</option>
                            <option>1 PM</option>
                            <option>2 PM</option>
                            <option>3 PM</option>
                            <option>4 PM</option>
                            <option>5 PM</option>
                            <option>6 PM</option>

                        </select>
                        <span class="select-arrow"></span>
                    </div>
                </div>


                </div>


                    <!--for address-->
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="Address" id="address" value="{{ $appointment->Address }}" required>
                    </div>

                    <div class="row">

                        <!--for city-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="City" id="city" value="{{ $appointment->City }}" required>
                            </div>
                        </div>

                        <!--for zip-->
                        <div class="col-sm-6">

                            <div class="form-group">
                                <label for="zip">Zipcode</label>
                                <input type="number" class="form-control" name="Zip" id="zip" value="{{ $appointment->Zip }}" required>
                            </div>
                        </div>

                    </div>
                       
                    <!--for service type-->
                    <div class="row">
                        <div class="form-group col-sm-8">
                            <label for="Time">Service</label>
                            <select class="form-control" name="type" id="type" value="{{ $appointment->type }}" required>
                                <option  selected hidden>{{ $appointment->type }}</option>
                                <option>Landscaping</option>
                                <option>Fencing</option>
                                <option>Lawns & Garden</option>
                            </select>
                            <span class="select-arrow"></span>
                        </div>
                    </div>
    


        

                    <br>
                    <!--submit button-->
                    <div class="form-group row mb-0">

                        <div class="col-md-4 offset-md-4">
                        
                            <input type="submit" class="btn btn-outline-primary" value="Update">
                        </div>

                    </div>


       
                    <br>

                </form>
            </div>
        </div>
    </div>
    
    @endif



@endsection