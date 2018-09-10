<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RTO;
use App\Vehicle;
use Auth;
use DB;

class VehicleController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:rto');
    // }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show_index()
    {
        $vehicles = Vehicle::orderby('created_at','desc')->paginate(3);
        return view('auth.Vehicle.show_index')->with('vehicles', $vehicles);
    }
    
    public function show_vehicle()
    {
        $id = auth()->user()->id;
        $vehicle = Vehicle::find($id);
        return view('auth.Vehicle.show_vehicle')->with('vehicle', $vehicle);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}