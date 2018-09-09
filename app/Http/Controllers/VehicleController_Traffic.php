<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RTO;
use App\Vehicle;
use Auth;
use DB;

class VehicleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:rto');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::orderby('created_at', 'desc')->paginate(5);
        return view('Vehicle.index')->with('vehicles',$vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Vehicle.add');
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
            'rc_no' => 'required|regex:/^[a-zA-Z0-9]+$/u',
            'class' => 'required|string',
            'model' => 'required',
            'fitness_upto' => 'required|date',
            'fuel_type' => 'required',
            'registration_date' => 'required|date',
            'engine_number' => 'required|regex:/^[a-zA-Z0-9]+$/u',
            'insurance_upto' => 'required|date',
            'pollution_upto' => 'required|date'
        ]);

        $vehicle = new Vehicle;
        $vehicle->rc_no = $request->input('rc_no');
        $vehicle->class = $request->input('class');
        $vehicle->model = $request->input('model');
        $vehicle->fitness_upto = $request->input('fitness_upto');
        $vehicle->fuel_type = $request->input('fuel_type');
        $vehicle->registration_date = $request->input('registration_date');
        $vehicle->engine_number = $request->input('engine_number');
        $vehicle->insurance_upto = $request->input('insurance_upto');
        $vehicle->pollution_upto = $request->input('pollution_upto');

        $vehicle->save();

        return redirect('vehicle')->with('success','Vehicle added' );

       
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
        return view('Vehicle.show')->with('vehicle', $vehicle);
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