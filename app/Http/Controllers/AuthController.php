<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

            $kredensil = $request->only('username','password');
            //disini ngecek role
            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'superadmin') {
                    return redirect()->intended('superadmin');
                } elseif ($user->level == 'admin') {
                    return redirect()->intended('admin');
                } elseif ($user->level == 'security') {
                    return redirect()->intended('security');
                } elseif ($user->level == 'useracara') {
                    return redirect()->intended('useracara');
                }
                return redirect()->intended('/');
            }
            return redirect('login')->with('error',"Salah Username / Password");
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
        # code...
    }
}
