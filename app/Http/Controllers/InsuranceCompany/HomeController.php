<?php

namespace App\Http\Controllers\InsuranceCompany;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\InsuranceCompany;
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
        $this->middleware('auth:insurancecompany');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = InsuranceCompany::find($user_id);
        // $vehicles = Vehicle::all();
        return view('InsuranceCompany.homepage.home')->with('vehicles', $user->vehicles);
    }

    public function index1()
    {
        $vehicles = Vehicle::all();
        return view('InsuranceCompany.homepage.show_all')->with('vehicles', $vehicles);
    }
}
