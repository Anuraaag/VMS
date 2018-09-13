<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;    

class VehicleController_RTO extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
     public function __construct()
    {
        $this->middleware('auth:rto');
    }


     public function index()
    {
        $vehicles = Vehicle::orderby('created_at','desc')->paginate(3);
        return view('RTO.Vehicle.show_index')->with('vehicles', $vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RTO.Vehicle.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'rc_no' => 'required|unique:vehicle|regex:/^[a-zA-Z0-9]+$/u',
            'class' => 'required|string',
            'model' => 'required',
            'fuel_type' => 'required',
            'registration_date' => 'required|date',
            'engine_number' => 'required|regex:/^[a-zA-Z0-9]+$/u',        
            'owner_id' => 'required|numeric',
            ]);

        $vehicle = new Vehicle;
        $vehicle->rc_no = $request->input('rc_no');
        $vehicle->class = $request->input('class');
        $vehicle->model = $request->input('model');
        $vehicle->fuel_type = $request->input('fuel_type');
        $vehicle->registration_date = $request->input('registration_date');
        $vehicle->engine_number = $request->input('engine_number');
        $vehicle->owner_id = $request->input('owner_id');
        //$vehicle->insurance_id = $request->input('insurance_id');
        $vehicle->rto_id = auth()->user()->id;

        $vehicle->save();

        return redirect('RTO_vehicle')->with('success','Vehicle added' );
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
        return view('RTO.Vehicle.show_vehicle')->with('vehicle', $vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response    
     */
    // public function edit($id)
    // {
    //     $vehicle = Vehicle::find($id);
    //     return view('RTO.Vehicle.edit')->with('vehicle', $vehicle);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
 
    //  public function update(Request $request, $id)
    // {
    //     $this->validate($request, [
    //         'owner_id' => 'required|numeric',
    //     ]);
        
    //     $user_id = Vehicle::user()->id;

    //     DB::table('users')->where('id', $user_id)->update(['owner_id' => $request->input('owner_id')]);
    //     return redirect('showProfile');                   
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
