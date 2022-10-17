<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class securityController extends Controller
{
    public function dashboard()
    {
        return view('security.dashboard');
    }
    public function scan()
    {
        return view('security.scan');
    }
}
