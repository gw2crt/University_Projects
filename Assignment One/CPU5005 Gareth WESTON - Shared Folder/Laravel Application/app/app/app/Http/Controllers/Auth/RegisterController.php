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
    protected $redirectTo = '/home';

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
            'firstname' => 'required|max:255',
            'surname' => 'required|max:255',
            'nhsnumber' => 'required|max:255',
            'dob' => 'required|max:255',
            'gender' => 'required|max:255',
            'height' => 'required|max:255',
            'weight' => 'required|max:255',
            'systolic' => 'required|max:255',
            'diastolic' => 'required|max:255',
            'medication' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'surname' => $data['surname'],
            'nhsnumber' => $data['nhsnumber'],
            'dob' => $data['dob'],
            'gender' => $data['gender'],
            'height' => $data['height'],
            'weight' => $data['weight'],
            'systolic' => $data['systolic'],
            'diastolic' => $data['diastolic'],
            'medication' => $data['medication'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
