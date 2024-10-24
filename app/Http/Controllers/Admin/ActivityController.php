<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        View::share('main_menu', 'Activities');
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
        $data['activities'] = Activity::get();
        // dd($data['users']);
        return view('admin.activity.index', $data);
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'  => 'required',
            'description' => 'required',
        ]);

        $activity = new Activity();

        $activity->name = $request->name;
        $activity->description = $request->description;
        
        if ($activity->save()) {
            return response()->json(['success' => 'Activity added successfully.']);
        } else {
            return response()->json(['error' => 'Activity addition failed! Please try again.'], 500);
        }
        
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'edit_activity_name' => 'required',
            'edit_activity_description' => 'required',
        ]);
        $id = $request->id;

        if ( $activity = Activity::find($id) ) {
            // $admin = new User();
            $activity->name = $request->edit_activity_name;
            $activity->description = $request->edit_activity_description;
          
            if ($activity->save()) {
                return response()->json(['success' => 'Activity updated successfully.']);
            } else {
                return response()->json(['error' => 'Activity update failed! Please try again.'], 500);
            }
        } else{
            return redirect()->json(['error' => 'Activity update failed! Please try again.'], 500);
        }
            

    }

    public function destroy(Request $request)
    {
        $id = $request->delete_activity_id;
        if ($activity = Activity::find($id)) {
            if ($activity->delete()) {
                $success = "Activity deleted successfully.";
            } else {
                $success = "Activity delete failed! Please try again";
            }
            return response()->json($success);
        } else {
            $success = "Activity not found! Please refresh the page.";
            return response()->json($success);
        }
    }


    /**
     * Fetch menu data from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function fetch_activity_data()
    {
        $get_activity = Activity::get();
        if($get_activity->count() > 0){
            $data = [];
            foreach ($get_activity as $activity){
                $id = $activity->id;
                $name = $activity->name;
                $description = $activity->description;
                // dd( $description ) ;
                $session = "<a href=\"javascript:void(0)\"><button type=\"button\" data-toggle=\"tooltip\" onclick='show_delete_modal(\"$id\", \"$name\")' data-placement=\"top\" title=\"Delete\" class=\"btn btn-orange btn-sm\">Sessions</button></a>";

                $delete_btn = "<a href=\"javascript:void(0)\"><button type=\"button\" data-toggle=\"tooltip\" onclick='show_delete_modal(\"$id\", \"$name\")' data-placement=\"top\" title=\"Delete\" class=\"btn btn-red btn-sm\">Delete</button></a>";
                $edit_btn = "<a href=\"javascript:void(0)\">
                <button type=\"button\" data-toggle=\"tooltip\" 
                onclick='show_edit_modal(\"" . htmlspecialchars($id, ENT_QUOTES) . "\", \"" . htmlspecialchars($name, ENT_QUOTES) . "\", \"" . htmlspecialchars($description, ENT_QUOTES) . "\")' 
                data-placement=\"top\" title=\"Edit\" class=\"btn btn-green btn-sm\">Edit</button></a>";


                $action = "$delete_btn $edit_btn";
                $temp = array(); 
                // array_push($temp, $registered_date);
                array_push($temp, $name);
                array_push($temp, $description);
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
