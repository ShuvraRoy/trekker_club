<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        if (auth()->user()->is_admin == 1 ) {
            return redirect('/admin');
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function get_login()
    {
        $data = [];
        $data['activities'] =  Activity::all();
        return view('auth.login',  $data);
    }

    public function post_login(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $login_status = 'invalid';
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password] )) {
            $user = User::find(Auth::user()->id);
            // $user->last_login = date('Y-m-d H:i:s');
            $user->save();
            $user_type = $user->is_admin;
            $user_data = [
                'name' => Auth::user()->name,
                'id' => Crypt::encryptString(Auth::user()->id),
                // 'user_id' => Crypt::encryptString(Auth::user()->user_id),
                'is_super_user' => Crypt::encryptString($user->is_super_user),
                'is_admin' => Crypt::encryptString($user->is_admin),
            ];
            session(['user_data' => $user_data]);

            $login_status = 'success';
        }
        //$resp['login_status'] = $login_status;
        if($login_status == 'success') {
            // dd($user_type);
            if ($user_type == 1) {
                return redirect('/admin');
            }
            else {
                return Redirect::intended('/profile');
            }
          
        } else{
            return redirect()->back()->with('error', 'Login Failed! Please try with correct email and password');
        }
        //echo json_encode($resp);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
    }
}
