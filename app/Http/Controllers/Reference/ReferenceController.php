<?php

namespace App\Http\Controllers\Reference;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    public function index()
    {
        return view('reference.index')->with('success', "welcome to reference page");
    }
}
