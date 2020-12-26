<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        Auth::guard()->logout();
        // auth()->attempt($loginData)
        //Attempt to log the admin in
        
        if (auth()->attempt($credential, $request->member)) {
            // if login succesful, then redirect to their intended location
      
                return redirect('dashboard/');
            
        }else {
            return redirect('/login')->withErrors(['email or password feild']);
        }

        // if Unsuccessful, then redirect back to the login with the form data
        // return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout()
    {
        Auth::guard()->logout();
        return redirect('/');
    }
}
