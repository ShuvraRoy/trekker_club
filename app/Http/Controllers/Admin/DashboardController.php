<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ParticipantModel;
use App\Models\Session;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        View::share('main_menu', 'Dashboard');
    }
    /**
     * Display a listing of the resource.
     *ida
     * @return Renderable
     */
    public function index()
    {
        $data = [];
        $data['sub_menu'] = "";
        $data['activities'] = Activity::get()->count();
        $data['sessions'] = Session::get()->count();
        $data['participant'] = ParticipantModel::get()->count();

        return view('admin.dashboard', $data);
    }
}
