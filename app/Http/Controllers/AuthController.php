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
        return view('system.registration');
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
