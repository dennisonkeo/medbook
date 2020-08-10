<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Service;

class AdminController extends Controller
{
    
    public function index()
    {
    	$total_patients = Patient::all();
    	$patients = Patient::take(5)->get();
    	$services = Service::all();

    	return view('admin.dashboard', compact('patients','services','total_patients'));
    }
}
