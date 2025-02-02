<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role','User')->get();
        return view('admin.pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Check if the directory exists; if not, create it
        if (!file_exists(public_path('admin/img/user'))) {
            mkdir(public_path('admin/img/user'), 0755, true); // Make sure directory is writable
        }

        $validated = $request->validate([
            'user_first_name' => 'required|string|max:100',
            'user_last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'user_gender' => 'required|string|max:10',
            'user_photo' => 'required|image|mimes:jpg,jpeg,png|max:10240',
            'user_phone_number' => 'required|numeric',
            'user_expert_in' => 'required|string|max:255',
        ]);

        // dd($validated);

        // Check if a file has been uploaded
        if ($request->hasFile('user_photo')) {
            $photo = $request->file('user_photo');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('admin/img/user'), $photoName);

            $validated['user_photo'] = 'admin/img/user/' . $photoName;
        }

        $validated['role'] = 'Trainer';
        $validated['password'] = '123456';
        $validated['email_verified_at'] = now();
        $validated['email_verification_sent_at'] = now();

        $user = User::create($validated);

        if ($user) {
            return redirect()->route('user.create')->with('success', 'Trainer created successfully!');
        } else {
            return redirect()->route('user.create')->with('error', 'Failed to create Trainer!');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getTrainers(){
        $trainers = User::where('role', 'Trainer')->get();
        return view('admin.pages.user.trainer', compact('trainers'));
    }
}
