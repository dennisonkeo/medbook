<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminUser;
use App\Church;
use App\BillingPlan;
use App\Payment;
use App\AdminGroup;
use Illuminate\Support\Facades\Hash;

class ChurchController extends Controller
{
    public function create(Request $request)
    {
    	$howmany = 1;
    	if($request->plan == "Multiple")
    	{
    		$howmany =$request->no_church;
    	}
    	$user = new AdminUser;
    	$name = ($request->first_name." ".$request->last_name);

        $user->username=$request->email;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->Phone_no=$request->phone;
        $user->first_name=$name;
        $user->active=1;
        $user->save();

        $admin = new AdminGroup;
        $admin->user_id = $user->id;
        $admin->group_id = 3;
        $admin->save();

        $billing = new BillingPlan;
        $billing->user_id = $user->id;
        $billing->plan = $request->plan;
        $billing->subscription = $request->subscription;
        $billing->no_churches = $howmany;
        $billing->amount = 2000;
        $billing->save();

        $payment = new Payment;
        $payment->user_id = $user->id;
        $payment->amount = 2000;
        $payment->trans_no = $request->trans_no;
        $payment->save();

        $church = new Church();
        $church->name = $request->church;
        $church->pastor = $name;
        $church->phone = $request->church_phone;
        $church->email = $request->email;
        $church->address = $request->address;
        $church->save();

        return response(['Message'=>"Success"]);

        // return Redirect::to("http://localhost/Richtech/idms/admin/login/index/31");
        // return redirect('/admin');
        // ->with('status', "You were successfully registered.");
    }

}
