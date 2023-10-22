<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function loginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
      //  dd('login');
        $request->validate([
        'email' => 'required|email',
        'password' => 'required'
      
        ]);
        $remember = $request->has('remember') ? true : false;
        if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password,
      
        ], $remember)) {
    //  /DD(Auth::user()->id);
            if (Auth::user()->role == 3) {
                session()->flash('success', 'You logged in ');
                session()->flash('type', 'User Login');
         

                return redirect('cleaning')->with('success', 'Welcome back');
            }

            session()->flash('success', 'You logged in ');
            session()->flash('type', 'User Login');
         

            return redirect('admin')->with('success', 'Welcome back');
        }
        return redirect()->back()->withInput()->withErrors(['email' => 'Your privided cred could not be verified']);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('loginForm')->with('success', 'Good bye');
        ;
    }
}
