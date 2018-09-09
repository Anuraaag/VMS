<?php

namespace App\Http\Controllers\InsuranceCompany;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\InsuranceCompany;

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
        return view('InsuranceCompany.homepage.home');
    }
}
