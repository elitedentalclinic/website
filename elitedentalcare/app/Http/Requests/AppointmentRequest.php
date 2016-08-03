<?php

namespace Elitedentalcare\Http\Requests;

use Elitedentalcare\Http\Requests\Request;

class AppointmentRequest extends Request
{

    protected $redirectRoute = 'welcome' ;

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'patient_name' => 'required',
            'phone_number' => 'required'
        ];
    }
}
