<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    // index Authentication
    public function index()
    {
        return view('system.auth', ['route'=>'default']);
    }



    //Show the Registration Form.
    public function show_register_form()
    {

        if(Session::get('send_code')){
            $data = Session::get('send_code');
            $registration_code = getSerial();
            $username = generateUserName();

            return view('system.auth', ['route'=>'register'], compact('data', 'registration_code', 'username'));
        } else{
            $data = [
              'student_code' => null,
                'student_email' => null,
            ];
            $registration_code = getSerial();
            $username = generateUserName();
            return view('system.auth', ['route'=> 'register'], compact('data','registration_code', 'username'));
        }


//        $code = getSerial();
//        $student_code = Session::get('student_code');
//        $student_email = Session::get('student_email');
//        $serial = Session::get('serial');
//        $username = generateUserName();
//        return view('system.auth', ['route'=>'register'], compact('student_code', 'student_email', 'code', 'serial', 'username'));
    }



    // Verify Registration Code and Redirect to Registration Page.


    // Send Registration Code and Redirect to Registration Page.

    public function send_registration_code(Request $request)
        {
            $data = $request->except('_token');
            return Redirect::route('auth.register')->with('send_code', $data);
        }



    public function verify_coded(Request $request)
    {
        $code = $request->input('student_code');
        $email = $request->input('student_email');
        $serial = getSerial();

        $data['verify'] = $request->all();
        return Redirect::route('auth.register', $data);

//        return Redirect::route('auth.register')
//            ->with('student_code', $code)
//            ->with('student_email', $email)
//            ->with('serial', $serial);
    }



    // Check Confirmations Data Before Submit to databae.
    public function confirmation (Request $request) {


        $data['confirmed'] = $request->except('_token');
        return view('system.auth', ['route'=>'confirmed'], $data);


    }



    // Edit and Confirm Register Data

    public function edited_register()
    {
        return "OK";
    }

    public function confirmed_register($data)
    {
        dd($data);
    }

}
