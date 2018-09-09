<?php

namespace App\Http\Controllers\TrafficPolice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\TrafficPolice;

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
        return view('TrafficPolice.homepage.home');
    }
}
