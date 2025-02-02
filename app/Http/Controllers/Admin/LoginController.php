<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.pages.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index')->with('success', 'Login successful!');
        }

        return redirect()->route('login.admin')->with('loginError', 'Enter Valid Email Address or Password!');
    }

    public function logout()
    {
        // Log the user out
        Auth::logout();

        // Redirect to the login page or wherever
        return redirect()->route('login.admin');
    }
}
