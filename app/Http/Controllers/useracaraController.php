<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class useracaraController extends Controller
{
    public function dashboard()
    {
        return view('useracara.dashboard');
    }
}
