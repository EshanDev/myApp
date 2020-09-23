<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('system.auth');
    }


    public function show_register_form()
    {
        return view('system.auth');
    }

    public function verify_coded(Request $request)
    {
        $code = $request->input('student_code');
        $email = $request->input('student_email');

        $data = array(
          'code' => $code,
          'email' => $email
        );

        return redirect()->route('auth.register', $data);
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
