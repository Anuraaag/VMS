<?php

namespace App\Http\Controllers\RTO;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\RTO;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:rto');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('RTO.homepage.home');
    }
}
