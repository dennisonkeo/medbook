<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;

class GenderController extends Controller
{
    //

    public function index()
    {
    	$gender = Gender::all();
    	return view('admin.gender', compact('gender'));
    }

    public function addGender(Request $request)
    {
    	$this->validate($request,[

            'name'=>'required|string|unique:genders',

            ]);

    	$gender = new Gender;

    	$gender->name = $request->gender;


    	$gender->save();

    	return back();

    }


}
