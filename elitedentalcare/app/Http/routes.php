<?php


Route::get('/', function () {
    return view('welcome');
});
Route::post('appointment', ['uses' =>  'AppointmentController@sendmail']);
