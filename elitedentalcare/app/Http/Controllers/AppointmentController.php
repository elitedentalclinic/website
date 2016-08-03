<?php

namespace Elitedentalcare\Http\Controllers;

use Mail ;
use Illuminate\Http\Request;

use Elitedentalcare\Http\Requests;
use Elitedentalcare\Http\Requests\AppointmentRequest ;

class AppointmentController extends Controller
{
     public function sendmail(AppointmentRequest $request)
     {
         Mail::queue('mail.appointment', ['patient_name' => $request->input('patient_name'),
                 'phone_number' => $request->input('phone_number'), 'appo_date' => $request->input('appo_date')],
                 function ($msg) {
                     $msg->from('patient@elitedentalcare.co.in', 'Dental Patient');
                     $msg->to('care@elitedentalcare.co.in')->subject('Appointment Request');
                 });
             return redirect()->back()->with('status', 'true');
     }
}
