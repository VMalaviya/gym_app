<?php

namespace App\Http\Controllers\Gym;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('gym.pages.login');
    }

    public function loginUser(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        

        if (Auth::attempt([
            'email' => $validated['email'], 
            'password' => $validated['password']
        ])) {
            return redirect()->route('gym.pages.home')->with('success', 'Login successful!');
        }

        return redirect()->route('gym.pages.login')->with('loginError', 'Enter Valid Email Address or Password!');
    }

    public function logout()
    {
        // Log the user out
        Auth::logout();

        // Redirect to the login page or wherever
        return redirect()->route('gym.pages.login');
    }
}
