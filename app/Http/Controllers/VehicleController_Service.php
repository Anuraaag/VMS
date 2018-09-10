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
     
    public function showVehicle()
    {
        $id = auth()->user()->id;
        $vehicle = Vehicle::find($id);
        return view('ServiceCenter.Vehicle.show')->with('vehicle',$vehicle);
    }

    public function editVehicle()
    {
        $id = auth()->user()->id;
        $vehicle = User::find($id);
        return view('ServiceCenter.Vehicle.edit')->with('vehicle', $vehicle);
    }

    public function updateVehicle(Request $request)
    {
        $this->validate($request, [
            'rc_no' => 'required|regex:/^[a-zA-Z0-9]+$/u',
            'fitness_upto' => 'required|date',
            'pollution_upto' => 'required|date',        
        ]);
        
        $user_id = Auth::user()->id;

        DB::table('vehicle')->where('id', $user_id)->update(['fitness_upto' => $request->input('fitness_upto'),
                                                            'pollution_upto' => $request->input('pollution_upto'),
                                                            ]);
        
        return redirect('showVehicle');                   
    }
}