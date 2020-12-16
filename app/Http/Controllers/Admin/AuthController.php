<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function  index()
    {
    	return view('Admin.login');
    }

    public function authentication(Request $request) 
    {

    	//dd($request->all());

    	 if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
      
            	echo "ok";
           // Authentication passed...
            return redirect()->route('list-property-type');
         }
         else
         {
         	//echo "bad";
            return redirect()->back()->with('error','Please check email password');
         }

    }

    public function logout()
    {
    	 Auth::logout();
        return redirect('/');
    }
}
