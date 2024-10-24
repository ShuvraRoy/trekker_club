<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        View::share('main_menu', 'Users');
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
        return view('admin.users', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function destroy(Request $request)
    {
        $id = $request->delete_user_id;
        if ($user = User::find($id)) {
            if ($user->delete()) {
                $success = "User deleted successfully.";
            } else {
                $success = "User delete failed! Please try again";
            }
            return response()->json($success);
        } else {
            $success = "User not found! Please refresh the page.";
            return response()->json($success);
        }
    }




    /**
     * Fetch menu data from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function fetch_user_data()
    {
        $get_user = User::where('is_admin','0')
                    ->get();
        if($get_user->count() > 0){
            $data = [];
            foreach ($get_user as $user){
                $id = $user->id;
                $name = $user->name;
                $email = $user->email ; 
                $age = $user->age ; 
                $phone = $user->phone; 
                $emergency_contact = $user->emergency_contact; 
                $medical_condition = $user->medical_condition; 
                $dietary_preference = $user->dietary_preference; 

                $registered_date = date("M d, Y", strtotime( $user->created_at ));

                $delete_btn = "<a href=\"javascript:void(0)\"><button type=\"button\" data-toggle=\"tooltip\" onclick='show_delete_modal(\"$id\", \"$name\")' data-placement=\"top\" title=\"Delete\" class=\"btn btn-red btn-sm\">Delete</button></a>";
                
                $action = "$delete_btn";
                $temp = array(); 
                // array_push($temp, $registered_date);
                array_push($temp, $name);
                array_push($temp, $email);
                array_push($temp, $age);
                array_push($temp, $phone);
                array_push($temp, $emergency_contact);
                array_push($temp, $medical_condition);
                array_push($temp, $dietary_preference);
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
