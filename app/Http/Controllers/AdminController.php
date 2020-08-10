<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Service;
use Auth;

class AdminController extends Controller
{
    
    public function index()
    {
    	$total_patients = Patient::all();
    	$patients = Patient::take(5)->get();
    	$services = Service::all();

    	return view('admin.dashboard', compact('patients','services','total_patients'));
    }

    public function login(Request $request)
    {
         $this->validate($request,[
            'email' => ['required', 'string', 'email'],
            'password' => ['required']

            ]);


        if (Auth::attempt(['email' => $request->email,'password' => $request->password]) )
        {
          
            return redirect('/');

        }
        else
        {
        	return back()->with('warning', 'Email/password is incorrect.'); 

        }
     }

     public function logout(Request $request)
	{
	    if(Auth::check())
	    {
	        Auth::logout();
	        $request->session()->invalidate();
	    }
	    return  redirect('/');
	}

             
    
}
