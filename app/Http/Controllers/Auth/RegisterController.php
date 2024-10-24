<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function post_registration(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:8', // Minimum length of 8 characters
                'max:12', // Maximum length of 12 characters
                'regex:/[A-Z]/', // At least 1 uppercase letter
                'regex:/[0-9]/', // At least 1 number
                'regex:/[@$!%*?&#]/', // At least 1 special character
                'confirmed', // Password confirmation
            ],
            'phone' => 'required|string|regex:/^[0-9]{10,15}$/', // Phone number validation (10 to 15 digits)
            'age' => 'required|integer|min:0', // Age must not be less than 0
            'emergency_contact' => 'required|string|regex:/^[0-9]{10,15}$/', // Emergency contact validation (10 to 15 digits)
            'medical_condition' => 'nullable|string',
            'dietary_preference' => 'nullable|string',
        ]);

        // Create a new user record
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encrypt the password
            'phone' => $request->phone,
            'age' => $request->age,
            'emergency_contact' => $request->emergency_contact,
            'medical_condition' => $request->medical_condition,
            'dietary_preference' => $request->dietary_preference,
        ]);

        if ($user) {
            Auth::loginUsingId( $id);
            // If the user is created successfully, redirect to the home page
            return redirect('/profile')->with('success', 'Registration successful!');
        } else {
            // If user creation failed, return back to the registration page with an error message
            return redirect()->back()->with('error', 'Registration failed. Please try again.')->withInput();
        }
    }
}
