<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Service;
use App\Gender;

class PatientController extends Controller
{
    public function index()
    {
    	$patients = Patient::all();
    	$services = Service::all();
    	$genders = Gender::all();
    	return view('admin.patients', compact('patients','genders','services'));
    }

    public function addPatient(Request $request)
    {
    	$patient = new Patient;

    	$patient->name = $request->name;
    	$patient->gender_id = $request->gender;
    	$patient->dob = $request->dob;
    	$patient->service_id = $request->service;
    	$patient->comment = $request->comment;

    	$patient->save();

    	return back();

    }
}
