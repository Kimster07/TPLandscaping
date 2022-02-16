<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Appointment;
use Redirect;


class AppointmentsController extends Controller
{

    public function index() {
    }

//function to get booking form.
    public function create() {
        return view('/book');
    }

//function to show all appointments for the logged in user by id.
//the appointments for the user id are stored in the $appointments variable and displayed on the appointments.blade.php page
    public function show(){
        $appointments = Appointment::all()->where('user_id',Auth::user()->id);
        return view('appointments', ['apponntments' => $appointments]);

    }

//function to post data from the booking form in the database
//here if statement is used to prevent multiple appointments on the same time slot
    public function store(Request $request)
    {
        // return $request;

        $check = Appointment::where('date',$request->date)-> where('time',$request->time)-> count();
        // $check1 = Appointment::where('date',$request->date)->where('time',$request->time)->count();

        if ($check == 0 ){

            $appointment = new Appointment();

            $appointment -> user_id = Auth::user()->id;
            $appointment -> name = $request->name;
            $appointment -> date = $request->date;
            $appointment -> time = $request->time;
            $appointment -> address = $request->address;
            $appointment -> city = $request->city;
            $appointment -> zip = $request->zip;
            $appointment -> type = $request->type;

            $appointment->save();

            return Redirect::to('appointments')->withSuccess('Booking success');
        }else{
            return Redirect::to('book')->withError('Booking error');
        }

    }

//function to get the update booking form
    public function edit($id){

        $appointment = Appointment::find($id);

        return view('update', ['appointment' => $appointment]);

    }

//function to post the update in the database
    public function update(Request $request)
    {
        // return $request;
        Appointment::where('id', $request->booking_id)->update(['name' =>$request->name]);
        Appointment::where('id', $request->booking_id)->update(['date' =>$request->date]);
        Appointment::where('id', $request->booking_id)->update(['time' =>$request->time]);
        Appointment::where('id', $request->booking_id)->update(['Address' =>$request->Address]);
        Appointment::where('id', $request->booking_id)->update(['City' =>$request->City]);
        Appointment::where('id', $request->booking_id)->update(['Zip' =>$request->Zip]);
        Appointment::where('id', $request->booking_id)->update(['type' =>$request->type]);

        return Redirect::to('appointments');
    }


//function to delete the appointment
    public function destroy($id)
    {
        Appointment::find($id)->delete();
        return Redirect::to('appointments');
    }

}
