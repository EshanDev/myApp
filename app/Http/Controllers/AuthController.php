<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index()
    {
        return view('system.auth');
    }


    public function show_register_form()
    {

        $code = getSerial();
        $student_code = Session::get('student_code');
        $student_email = Session::get('student_email');
        $serial = Session::get('serial');



        return view('system.registration', compact('student_code', 'student_email', 'code', 'serial'));
    }








    // Verify Registration Code and Redirect to Registration Page.
    public function verify_coded(Request $request)
    {
        $code = $request->input('student_code');
        $email = $request->input('student_email');
        $serial = getSerial();


        return Redirect::route('auth.register')
                        ->with('student_code', $code)
                        ->with('student_email', $email)
                        ->with('serial', $serial);

    }











    public function create_registration_code(Request $request)
    {
        return response()->json($request->all());
    }


    public function verify_email(Request $request)
    {
        return response()->json($request->all());
    }


    public function verify_student_code(Request $request)
    {
        return response()->json($request->all());
    }


    public function verify_registration_code(Request $request)
    {
        return response()->json($request->all());
    }
}
