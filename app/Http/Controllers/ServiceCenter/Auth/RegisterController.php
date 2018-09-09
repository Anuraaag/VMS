<?php

namespace App\Http\Controllers\ServiceCenter\Auth;

use App\User;
use App\ServiceCenter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/servicecenter';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:servicecenter');
    }

    protected function guard()
    {
        return Auth::guard('servicecenter');
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
            'name' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'serviceCenterID' => 'required|regex:/^[a-zA-Z0-9]+$/u',
            // 'vehicleID' => 'required|regex:/^[a-zA-Z0-9]+$/u',
            // 'pollutionID' => 'required|regex:/^[a-zA-Z0-9]+$/u',
            // 'healthCertificateID' => 'required|regex:/^[a-zA-Z0-9]+$/u',
            // 'issueDate' => 'required|date',
            // 'expiryDate' => 'required|date',
            'location' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
            'password' => 'required|regex:"(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"|confirmed',
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
        return ServiceCenter::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'serviceCenterID' => $data['serviceCenterID'],
            // 'vehicleID' => $data['vehicleID'],
            // 'pollutionID' => $data['pollutionID'],
            // 'healthCertificateID' => $data['healthCertificateID'],
            // 'issueDate' => $data['issueDate'],
            // 'expiryDate' => $data['expiryDate'],
            'location' => $data['location'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        return view('ServiceCenter.auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

}
