<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ParticipantModel;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {

        $data = [];
        $data['user'] = Auth::user();
        $data['activities'] =  Activity::all();
        $data['bookedSessions'] = ParticipantModel::with(['session', 'session.activity']) 
                                    ->where('user_id', $data['user']->id) 
                                    ->get();
        return view('profile',  $data);
    }

    public function update(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:1',
            'phone' => 'required|string|max:20',
            'emergency_contact' => 'required|string|max:20',
            'medical_condition' => 'nullable|string|max:1000',
            'dietary_preference' => 'nullable|string|max:1000',
        ]);

        try {
            // Get the authenticated user
            $user_id = Auth::user()->id;
            $user = User::find($user_id);
            // Update the user's information
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->age = $request->input('age');
            $user->phone = $request->input('phone');
            $user->emergency_contact = $request->input('emergency_contact');
            $user->medical_condition = $request->input('medical_condition');
            $user->dietary_preference = $request->input('dietary_preference');
            $user->save();
            return back()->with('success', 'User information updated successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to update user information. Please try again.');
        }
    }
}
