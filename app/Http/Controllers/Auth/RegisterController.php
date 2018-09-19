<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login]';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|regex:/^[a-zA-Z]+$/u|max:255|alpha',
            'lname' => 'required|regex:/^[a-zA-Z]+$/u|max:255|alpha',
            'email' => 'required|string|email|max:255|unique:users',
            'dob' => 'required|date|before:-18 years',
            'gender'=> 'required|in:male,female,other',
            'phone' => 'required|numeric|unique:users',
            'password' => 'required|regex:"(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"|confirmed',
            'license_no' => 'required|numeric|unique:users',
            'aadhar_no' => 'required|numeric|unique:users',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'location' => $data['location'],
            'license_no' => $data['license_no'],
            'aadhar_no' => $data['aadhar_no'],
            'password' => bcrypt($data['password']),
        ]);
    }
}