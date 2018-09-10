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
    
    
    public function index()
    {
        $vehicles = Vehicle::orderby('created_at', 'desc')->paginate(5);
        return view('Vehicle.index')->with('vehicles',$vehicles);
    }
 

    public function create()
    {
        return view('Vehicle.add');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'rc_no' => 'required|regex:/^[a-zA-Z0-9]+$/u',
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

        $vehicle->save();

        return redirect('vehicle')->with('success','Vehicle added' );
       
    }


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


    public function editVehicle()
    {
        $id = auth()->user()->id;
        $vehicle = User::find($id);
        return view('RTO.Vehicle.edit')->with('vehicle', $vehicle);
    }
}