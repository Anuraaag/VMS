<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use Mail;

class VehicleController_Service extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:servicecenter');
    }
    
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
        return view('ServiceCenter.Vehicle.show_vehicle')->with('vehicle', $vehicle);
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
        //  if(auth()->user()->id != $vehicle->service_id){
        //      return redirect('/servicecenter')->with('error' , 'Unauthorized page');
        // }
        return view('ServiceCenter.Vehicle.edit')->with('vehicle',$vehicle);

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
            'pollution_upto' => 'required|date',
            'fitness_upto' => 'required|date'
        ]);

        //update insurance
        $vehicles = Vehicle::find($id);
        $vehicles->pollution_upto = $request->input('pollution_upto');
        $vehicles->fitness_upto = $request->input('fitness_upto');
        $vehicles->service_id = auth()->user()->id;
        $vehicles->save();

        // $data = array('name'=>Auth::guard('customer')->user()->name,'pname'=>$request->input('pname'),'pDesc'=>$request->input('pdesc'));
        // Mail::send('mail.mail', $data, function($message) {
        //    $message->to(Auth::guard('customer')->user()->email, Auth::guard('customer')->user()->name)->subject
        //       ('Service Kart');
           
        // });

        return redirect('/servicecenter')->with('success','Vehicle Updated');

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
