<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ParticipantModel;
use App\Models\Session;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserActivityController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = [];
        $data['user'] = Auth::user();
        $data['activities'] =  Activity::all();

        return view('activities',  $data);
    }

    public function about_us()
    {
        $data = [];
        $data['user'] = Auth::user();
        $data['activities'] =  Activity::all();
        return view('about_us',  $data);
    }

    public function team()
    {
        $data = [];
        $data['user'] = Auth::user();
        $data['activities'] =  Activity::all();
        return view('team',  $data);
    }


    public function show($name)
    {
        $data = [];
        $name = str_replace('-', ' ', strtolower($name));
        $data['user'] = Auth::user();
        $data['activities'] =  Activity::all();
        $data['current_activity'] = Activity::where('name', $name)->firstOrFail();
        $data['sessions'] = $data['current_activity']->sessions()->where('date_time', '>=', now())->get();

        return view('activities', $data);
    }

    public function book(Request $request, $id)
    {
        // dd("hit");
        // Check if user is authenticated
        if (!Auth::check()) {
            return response()->json(['error' => 'You need to sign in to book a session.'], 403);
        }

        $session = Session::findOrFail($id);

        if ($session->slots_available <= 0) {
            return response()->json(['error' => 'No slots available for this session.'], 400);
        }

        $session->slots_available -= 1;
        $session->save();

        $participant = new ParticipantModel();

        $participant::create([
            'user_id' => Auth::id(),
            'session_id' => $id,
        ]);

        return response()->json(['success' => 'You have booked successfully.', 'slots_available' => $session->slots_available]);
    }
}
