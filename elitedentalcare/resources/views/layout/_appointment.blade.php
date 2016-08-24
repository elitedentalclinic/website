      <div class="w3-card-4">
         <div class="w3-container w3-lime">
            <div><b>To Book An Appointment</b></div>
            <div class="w3-small">Request a dental appointment by filling out the form</div>
         @if(!session('status'))
            <div class="w3-card-4 w3-blue-grey" id="appointment_form">
                {!! Form::open(array('url' => 'appointment', 'class'=>'w3-form'))   !!}
                         <div class="w3-row-padding">
                        <div class="w3-threequarter">
                            {!! Form::label('patient_name', 'Name&#42;', ['class' =>'w3-tiny w3-validate']) !!}
                            {!! Form::text('patient_name', null, ['id' =>'patient_name', 'class' => 'w3-input w3-blue-grey w3-text-yellow w3-large', 'placeholder' => 'Name', 'required'=>'true']) !!}
                        </div>
                    </div>
                    <div class="w3-row-padding">
                        <div class="w3-half">
                            {!! Form::label('phone_number', 'Phone&#42;', ['class' =>'w3-tiny w3-validate']) !!}
                            {!! Form::text('phone_number', null, ['id' =>'phone_number', 'class' => 'w3-input w3-blue-grey', 'placeholder' => 'Phone', 'required'=>'true']) !!}
                        </div>
                        <div class="w3-half">
                            {!! Form::label('appo_date', 'Preferred Time', ['class' =>'w3-tiny']) !!}
                            <input type="datetime-local" class="w3-input w3-blue-grey" id="appo_date" name="appo_date">
                        </div>
                    </div>
                    <div class="w3-row">
                        <button  class="w3-btn w3-round w3-blue w3-margin" type="submit">
                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            &nbsp;BOOK APPOINTMENT</button>
                    </div>
                <!--</form> -->
                {!! Form::close()   !!}
            </div>
        @else
            <div class="w3-card-4 w3-blue-grey"  id="appointment_form_confirm">
                <div class="w3-padding">Thank you for choosing Elite Dental Care for your dental care.
                    A member of our team will contact you within one (1) business day
                    at the phone number provided to schedule your appointment.
                    We will make every attempt possible to accommodate your appointment request
                    and look forward to seeing you soon!</div>

            </div>
        @endif
            <div class="w3-row w3-margin">
                <span class="w3-tag w3-purple w3-small"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp; +91 997-204-2551</span>
                <span class="w3-tag w3-green w3-small"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp; +91 914-860-3980</span>
                <span class="w3-tag w3-pink w3-small"><i class="fa fa-tty" aria-hidden="true"></i>&nbsp; +91 802-531-5575</span>
            </div>

            <div class="w3-row w3-margin w3-center">
                <span class="w3-text-brown "><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; care@elitedentalcare.co.in</span>
            </div>

        </div>
    </div>
   <hr>
