<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TamuController extends Controller
{
    public function tamu_unit()
    {
        $units = DB::table('units')->get();
        return view('tamu\tamu-unit', ['units' => $units]);
    }
    public function tamu_acara()
    {
        return view('tamu\tamu-acara');
    }
}
