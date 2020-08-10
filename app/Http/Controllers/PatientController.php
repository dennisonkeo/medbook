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

    public function getPatient(Request $request)
    {
        $data = Patient::where('id', $request->post('id'))->first();

        return response()->json($data);
    }

    public function updatePatient(Request $request)
    {
        Patient::where('id', $request->post('id'))
                  ->update(array('name' => $request->post('name'),'dob' => $request->post('dob'),'service_id' => $request->post('service'),'gender_id' => $request->post('gender'), 'comment' => $request->post('comment')));

        return response()->json('success');
    }

    public function deletePatient(Patient $patient)
    {
        $patient->delete();

        return response()->json('success');
    }
}
