<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Activity;
use DateTime;

class SessionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        View::share('main_menu', 'Sessions');
    }
    /**
     * Display a listing of the resource.
     *z
     * @return Renderable
     */

    public function index()
    {
        $data = [];
        $data['sub_menu'] = "";
        $data['activities'] = Activity::all(); 
        // dd($data['users']);
        return view('admin.session.index', $data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'activity_id' => 'required|exists:activities,id',
            'date_time' => 'required|date',
            'slots' => 'required|integer|min:1',
            'duration' => 'required|integer|min:1', // Assuming duration is in minutes
            'location' => 'required|string|max:255',
            'fees' => 'required|numeric|min:0',
        ]);

        $session = new Session();
        $session->activity_id = $request->activity_id;
        $session->date_time = $request->date_time;
        $session->total_slots = $request->slots;
        $session->slots_available = $request->slots;
        $session->duration = $request->duration; // Store duration in minutes
        $session->location = $request->location;
        $session->fees = $request->fees;

        // Save the session to the database
        if ($session->save()) {
            return response()->json(['success' => 'Session added successfully.']);
        } else {
            return response()->json(['error' => 'Failed to add session! Please try again.'], 500);
        }
        
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'activity_id' => 'required|exists:activities,id', // Ensure the selected activity exists
            'date_time' => 'required|date', // Validate the date and time format
            'slots' => 'required|integer|min:1', // Ensure total slots are a positive integer
            'duration' => 'required|integer|min:1', // Ensure duration is a positive integer
            'location' => 'required|string|max:255', // Validate location
            'fees' => 'required|numeric|min:0', // Ensure fees are a positive number
        ]);
        $id = $request->id;

        if ( $session = Session::find($id) ) {
            $session->activity_id = $request->activity_id; // Update activity ID
            $session->date_time = $request->date_time; // Update date and time
            $session->total_slots = $request->slots; // Update total slots
            $session->duration = $request->duration; // Update duration
            $session->location = $request->location; // Update location
            $session->fees = $request->fees; // Update fees
          
            if ( $session->save() ) {
                return response()->json(['success' => 'Session updated successfully.']);
            } else {
                return response()->json(['error' => 'Session update failed! Please try again.'], 500);
            }
        } else{
            return redirect()->json(['error' => 'Session update failed! Please try again.'], 500);
        }
            

    }

    public function destroy(Request $request)
    {
        $id = $request->delete_session_id;

        // Find the session by ID
        if ($session = Session::find($id)) {
            // Check the number of booked slots
            $bookedSlots = $session->total_slots - $session->slots_available; // Calculate booked slots

            // If there are booked slots, prevent deletion and show an error
            if ($bookedSlots > 0) {
                return response()->json(['errors' => ['name' => "Already {$bookedSlots} slot(s) booked. You can't delete this session."]], 403); // Return a 403 Forbidden response
            }

            // Proceed to delete the session if no slots are booked
            if ($session->delete()) {
                return response()->json(['success' => "Session deleted successfully."]);
            } else {
                return response()->json(['errors' => ['name' => "Session delete failed! Please try again."]], 500);
            }
        } else {
            return response()->json(['errors' => ['name' => "Session not found! Please refresh the page."]], 404);
        }
    }


     /**
     * Fetch menu data from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function fetch_session_data()
    {
        $get_session = Session::with('activity')->get();
        if($get_session->count() > 0){
            $data = [];
            foreach ($get_session as $session){
                $id = $session->id;
                $date_time = $session->date_time;
                $formatted_date_time = date("d M, Y H:i A", strtotime( $date_time ));
                $activity_id = $session->activity_id;
                $activity_name = $session->activity->name;
                $location = $session->location;
                $duration = $session->duration;
                $hours = floor($duration / 60);
                $minutes = $duration % 60;
                $session_duration = (($hours ? "{$hours} hour" . ($hours > 1 ? 's' : '') : '') . 
                ($minutes ? " {$minutes} minute" . ($minutes > 1 ? 's' : '') : '')) ?: '0 minutes';
                $fees = $session->fees;
                $slots = $session->total_slots;
                $slots_available = $session->slots_available ; 
                // $participants = "<a href=\"javascript:void(0)\"><button type=\"button\" data-toggle=\"tooltip\" onclick='show_delete_modal(\"$id\", \"$name\")' data-placement=\"top\" title=\"Delete\" class=\"btn btn-orange btn-sm\">Sessions</button></a>";

                $delete_btn = "<a href=\"javascript:void(0)\"><button type=\"button\" data-toggle=\"tooltip\" onclick='show_delete_modal(\"$id\")' data-placement=\"top\" title=\"Delete\" class=\"btn btn-red btn-sm\">Delete</button></a>";
                $edit_btn = "<a href=\"javascript:void(0)\"><button type=\"button\" data-toggle=\"tooltip\" onclick='show_edit_modal(\"$id\", \"$date_time\", \"$activity_id\", \"$location\", \"$duration\", \"$fees\", \"$slots\")' data-placement=\"top\" title=\"Edit\" class=\"btn btn-green btn-sm\">Edit</button></a>";


                $action = "$delete_btn $edit_btn";
                $temp = array(); 
                // array_push($temp, $registered_date);
                array_push($temp, $formatted_date_time);
                array_push($temp, $activity_name);
                array_push($temp, $location);
                array_push($temp, $session_duration);
                array_push($temp, $fees);
                array_push($temp, $slots);
                array_push($temp, $slots_available);
                array_push($temp, $action);
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
