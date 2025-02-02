<?php

namespace App\Http\Controllers\Gym;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\VerifyUserEmail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Gym\RegisterUserRequest;

class RegisterController extends Controller
{
    public function index(){
        return view('gym.pages.register');
    }

    public function registerUser(RegisterUserRequest $request){
        
        // Validate user data
        $validated = $request->validated();
        
        $user = User::create([
            'user_first_name' => $validated['user_first_name'],
            'user_last_name' => $validated['user_last_name'],
            'email' => $validated['email'],
            'user_phone_number' => $validated['user_phone_number'],
            'password' => $validated['password'],
            'role' => 'User',
        ]);

        // Log in the user
        Auth::attempt([
            'email' => $validated['email'], 
            'password' => $validated['password']
        ]);
        $user = Auth::user();

        if($user){
            //Subject for Email
            $subject = 'Verify your email address';
            // Generate the email verification URL
            $verificationUrl = URL::temporarySignedRoute(
                'verification.verify',
                Carbon::now()->addMinutes(60),
                [
                    'id' => $user->id, 
                    'hash' => sha1($user->email)
                ]
            );

            // Send the email
            Mail::to($user->email)->send(new VerifyUserEmail($subject, $verificationUrl));

            // Redirect to welcome page
            return redirect()->route('welcome');

        } else {
            return redirect()->route('gym.pages.register')->with('error', 'Something want wrong, please try again.');
        }
    }

}
