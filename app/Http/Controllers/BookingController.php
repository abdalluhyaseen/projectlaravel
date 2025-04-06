<?php
namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentConfirmation;

class BookingController extends Controller{

public function create()
{
    $services = Service::all();
    return view('public.layout.booking', compact('services'));
}

public function store(Request $request)
{



    Appointment::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'service' => $request->service,
        'date' => $request->date,
        'time' => $request->time,
    ]);

    return redirect()->back()->with('success', 'Appointment booked successfully!');
}

}
