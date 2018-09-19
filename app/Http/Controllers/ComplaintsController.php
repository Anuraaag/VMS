<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Complaint;


class ComplaintsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:trafficpolice');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$complaints = Complaint::orderBy('created_at')->paginate(2);
        //$user_id = auth()->user()->id;
        //$user = Complaint::find($user_id);
        //return view('TrafficPolice.Complaint.index')->with('complaints', $complaints);
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

    public function addComplaint(Request $rc_no)
    {
        $rc = $rc_no->input('rc_no');
        $record = DB::select("select * from vehicle where rc_no = '$rc'");
        
        if(count($record) > 0)
            return view('TrafficPolice.Complaint.addComplaint')->with('complaints',$record);
        else
            return redirect()->back()->with('alert', 'No such RC found !');
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
            'penalty' => 'required|regex:/^[0-9]+$/u',
           // 'violation' => 'required|string',
            'area' => 'string|required',
            ]);

        $complaint = new Complaint;
        $complaint->penalty = $request->input('penalty');
        
        $allViolations = $request->input('violation');
        $violations = null;
        foreach($allViolations as $violation){
            $violations .= $violation.', ';
        }
        $complaint->violation = $violations;

        $complaint->area = $request->input('area');
        if($complaint->penalty > 0)
        {
            $complaint->status = 1;
        }     
        $complaint->traffic_id = auth()->user()->id;
        $complaint->vid =  $request->input('vid');
        $complaint->save();

        return redirect('/trafficpolice')->with('alert', 'Complaint lodged !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $user = auth()->user()->id;
        // $complaints = Complaint::find($user);
        $complaint = Complaint::find($id);
        return view('TrafficPolice.Complaint.showComplaint')->with('complaint', $complaint);
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
