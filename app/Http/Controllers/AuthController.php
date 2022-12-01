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
            if (Auth::guard('user')->attempt($kredensil)) {
                $user = Auth::guard('user')->user()->level;
                $user1 = Auth::guard('user')->user()->status;
                if ($user1 == '2') {
                    return redirect('login')->with('error',"Akun Di Non Aktifkan. Silahkan Hubungi Superadmin!!");
                }

                if ($user == 'superadmin') {
                    return redirect('superadmin/dashboard1');
                } elseif ($user == 'userunit') {
                    return redirect('userunit/dashboard2');
                } elseif ($user == 'security') {
                    return redirect('security/dashboard');
                } elseif ($user == 'useracara') {
                    return redirect('useracara/dashboard');
                }else
                return redirect()->intended('/');

            } else if (Auth::guard('unit')->attempt($kredensil)) {
                $user11 = Auth::guard('unit')->user()->level;
                
               
                if ($user11 == 'userunit') {
                    return redirect('userunit/dashboard2');
                } else
                return redirect()->intended('/');
            } 
            return redirect('login')->with('error',"Salah Username / Password");
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Auth::guard('user','unit')->logout();
        return Redirect('login')->with('pesan',"Logout Berhasil");
    }
}
