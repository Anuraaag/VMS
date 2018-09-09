<?php

namespace App\Http\Controllers\ServiceCenter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ServiceCenter;

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
        return view('ServiceCenter.homepage.home');
    }
}
