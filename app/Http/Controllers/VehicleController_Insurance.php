<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController_Insurance extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:insurancecompany');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::find($id);
        return view('InsuranceCompany.Vehicle.show_vehicle')->with('vehicle', $vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $vehicle = Vehicle::find($id);

        //Check for correct user
        //  if(auth()->user()->id != $vehicle->insurance_id){
        //      return redirect('/insurancecompany')->with('error' , 'Unauthorized page');
        // }
        return view('InsuranceCompany.Vehicle.edit')->with('vehicle',$vehicle);
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
        $this->validate($request, [
            'insurance_upto' => 'required|date'
        ]);

        //update insurance
        $vehicles = Vehicle::find($id);
        $vehicles->insurance_upto = $request->input('insurance_upto');
        $vehicles->insurance_id = auth()->user()->id;
        $vehicles->save();

        return redirect('/insurancecompany')->with('success','Vehicle Updated');
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
