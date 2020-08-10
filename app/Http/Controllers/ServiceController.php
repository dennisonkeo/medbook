<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    //

    public function index()
    {
    	$services = Service::all();
    	return view('admin.service', compact('services'));
    }

    public function addService(Request $request)
    {
    	$service = new Service;

    	$service->name = $request->service;


    	$service->save();

    	return back();

    }
}
