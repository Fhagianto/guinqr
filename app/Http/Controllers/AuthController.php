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
                // dd($request);
                $user = Auth::user()->level;
                if ($user == 'superadmin') {
                    return redirect('superadmin/dashboard');
                } elseif ($user == 'admin') {
                    return redirect('admin/dashboard');
                } elseif ($user == 'security') {
                    return redirect('security/dashboard');
                } elseif ($user == 'useracara') {
                    return redirect('useracara/dashboard');
                }else
                return redirect()->intended('/');
            }
            return redirect('login')->with('error',"Salah Username / Password");
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Auth::logout();
        return Redirect('login')->with('pesan',"Logout Berhasil");
    }
}
