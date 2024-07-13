<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class RegisterController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6', 'confirmed']
        ]);

        $employerAttributes = $request->validate([
            'employer' => 'required',
            'logo' => ['required', File::types(['svg', 'jpg', 'png', 'webp'])->max(1024)]
        ]);

        $user = User::create($userAttributes);

        $logoPath = $request->file('logo')->store('logos', 'public');

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath
        ]);

        return redirect()->route('loginpage')->with('success', 'User Registered Successfully');
    }
}
