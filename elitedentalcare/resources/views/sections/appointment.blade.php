<div class="bgappointment w3-display-container">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-light-grey w3-wide">APPOINTMENT</span>
    </div>
</div>
<div class="w3-content w3-container w3-padding-64" id="appointment" name="appointment">
    <h3 class="w3-center w3-text-blue">APPOINTMENT</h3>
    <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-center w3-section">
             <img src="{{asset('/image/appointment.jpg')}}" class="w3-round-large" alt="dr.manju abraham">
        </div>

        <div class="w3-col m8 w3-container w3-section">
            <div class="w3-margin-bottom w3-large">
                <i class="fa fa-map-marker w3-hover-text-black" style="width:30px"></i>
                <span>#14, JS Complex, Ist Floor, (Next to Vibgyor High School), </span>
                <div class="w3-margin-left" > Jayanthi Nagar Main Road, Near Raghavendra Circle,</div>
                <div class="w3-margin-left" > Horamavu,  Bangalore-560016 </div>
                <i class="fa fa-phone w3-hover-text-black" style="width:30px"></i>  +91 997-204-2551, +91 914-860-3980, +91 802-531-5575<br>
                <i class="fa fa-envelope w3-hover-text-black" style="width:30px"> </i>  care@elitedentalcare.co.in<br>
            </div>
            <p>Request a dental appointment by filling out the form:</p>
            {!! Form::open(array('url' => 'appointment', 'class'=>'w3-form'))   !!}
            <div class="w3-section">
             {!! Form::text('patient_name', null, ['id' =>'patient_name', 'class' => 'w3-input w3-border w3-hover-light-grey', 'placeholder' => 'Name', 'required'=>'true']) !!}
            </div>
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                    {!! Form::text('phone_number', null, ['id' =>'phone_number', 'class' => 'w3-input w3-border w3-hover-light-grey', 'placeholder' => 'Phone', 'required'=>'true']) !!}
                </div>
                <div class="w3-half">
                    <input type="datetime-local" class="w3-input w3-border w3-hover-light-grey" id="appo_date" name="appo_date">
                </div>
            </div>
            <button  class="w3-btn w3-round w3-teal w3-margin" type="submit">
                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                &nbsp;BOOK APPOINTMENT</button>
            {!! Form::close()   !!}
        </div>
    </div>
</div>