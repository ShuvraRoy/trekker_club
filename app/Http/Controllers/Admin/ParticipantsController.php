<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ParticipantModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;

class ParticipantsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        View::share('main_menu', 'Participants');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */

    public function index()
    {
        $data = [];
        $data['sub_menu'] = "";
        $data['users'] = User::where('is_admin', '0')
                        ->get();
        // dd($data['users']);
        return view('admin.participants', $data);
    }

    public function fetch_participant_data()
    {
        $participants = ParticipantModel::with(['user', 'session.activity'])
                        ->latest()                         
                        ->get();
        if($participants->count() > 0){
            $data = [];
            foreach ($participants as $participant){
                $id = $participant->id;
                $activity_name = $participant->session->activity->name;
                $user_name = $participant->user->name ; 
                $user_email = $participant->user->email ; 
                $age = $participant->user->age ; 
                $phone = $participant->user->phone; 
                $emergency_contact = $participant->user->emergency_contact; 
                $medical_condition = $participant->user->medical_condition; 
                $dietary_preference = $participant->user->dietary_preference; 

                $session_date = date("d M, Y H:i A", strtotime( $participant->session->date_time )); 

                
                $temp = array(); 
                // array_push($temp, $registered_date);
                array_push($temp, $activity_name);
                array_push($temp, $session_date);
                array_push($temp, $user_name);
                array_push($temp, $user_email);
                array_push($temp, $age);
                array_push($temp, $phone);
                array_push($temp, $emergency_contact);
                array_push($temp, $medical_condition);
                array_push($temp, $dietary_preference);
                array_push($data, $temp);
            }
            echo json_encode(array('data'=>$data));
        }else{
            echo '{
                    "sEcho": 1,
                    "iTotalRecords": "0",
                    "iTotalDisplayRecords": "0",
                    "aaData": []
                }';
        }
    }

}
