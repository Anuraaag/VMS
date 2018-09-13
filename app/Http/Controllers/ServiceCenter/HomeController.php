<?php

namespace App\Http\Controllers\ServiceCenter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ServiceCenter;
use App\Vehicle;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:servicecenter');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = ServiceCenter::find($user_id);
        return view('ServiceCenter.homepage.home')->with('vehicles', $user->vehicles);
    }

    public function index1()
    {
        $vehicles = Vehicle::all();
        return view('ServiceCenter.homepage.show_all')->with('vehicles', $vehicles);
    }
}
