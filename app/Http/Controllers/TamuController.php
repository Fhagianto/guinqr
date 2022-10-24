<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function tamu_unit()
    {
        return view('tamu\tamu-unit');
    }
}
