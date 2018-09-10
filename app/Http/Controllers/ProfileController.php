<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\User;
use Auth;
use DB;

class ProfileController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
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

    public function showProfile()
    {
        $id = auth()->user()->id;
        $data = User::find($id);
        return view('auth.profile.show')->with('data',$data);
    }

    public function editProfile()
    {
        $id = auth()->user()->id;
        $data = User::find($id);
        return view('auth.profile.edit')->with('data',$data);
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required|regex:/^[a-zA-Z]+$/u|max:255|alpha',
            'lname' => 'required|regex:/^[a-zA-Z]+$/u|max:255|alpha',
            'phone' => 'required|numeric',
        ]);
        
        $user_id = Auth::user()->id;

        DB::table('users')->where('id', $user_id)->update(['fname' => $request->input('fname'),
                                                            'lname' => $request->input('lname'),
                                                            'phone' => $request->input('phone')]);
        return redirect('showProfile');                   
    }
}
