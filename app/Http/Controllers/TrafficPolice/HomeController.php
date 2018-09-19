<?php

namespace App\Http\Controllers\TrafficPolice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\TrafficPolice;
use App\Complaint;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:trafficpolice');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user_id = auth()->user()->id;
        //$user = Complaint::find($user_id);
        $complaints = Complaint::orderby('created_at','desc')->paginate(3);
        $user_id = auth()->user()->id;
        $user = Complaint::where('traffic_id', $user_id)->get();        
        return view('TrafficPolice.Complaint.show_index')->with('complaints', $user);
        //return view('TrafficPolice.Complaint.show_index')->with('complaints', $complaints);
    }
}