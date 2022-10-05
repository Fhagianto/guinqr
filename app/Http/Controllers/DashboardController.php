<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('supadmin')) {
            return view('supadmin.dashboard');
            # code...
        }elseif (Auth::user()->hasRole('admin')) {
            return view('admin.dashboard');
            # code...
        }elseif (Auth::user()->hasRole('security')) {
            return view('security.dashboard');
            # code...
        }else {
            return view('useracara.dashboard');
        }
    }
}
