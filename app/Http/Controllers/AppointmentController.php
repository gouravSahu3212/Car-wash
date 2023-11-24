<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    function list_Appointments() {
        $appointments = Appointment::paginate(3);
        return view('list_Appointments')->with('appointments', $appointments);
    }

    function save_appointment(Request $request) {
        $input = $request->all();

        $name = $input['name'];
        $email = $input['email'];
        $phone = $input['phone'];
        $carModel = $input['carModel'];
        $appointmentDate = $input['appointmentDate'];
        $appointmentTime = $input['appointmentTime'];
        
        Appointment::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'model' => $carModel,
            'date' => $appointmentDate,
            'time' =>$appointmentTime
        ]);
        return redirect('home')->with('success', 'Appointment booked successfully!');
    }
}
