<?php

namespace App\Http\Controllers;

use App\Models\acara;
use App\Models\BukuTamuAcara;
use App\Models\TamuAcara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class useracaraController extends Controller
{
    public function dashboard()
    {
        $t=Auth::guard('user')->user()->id;
        $datas = acara::where('id_user_acara', $t)->Where("status", '1')->orWhere("status", '2')->get()->count();
        $aktif = acara::where('id_user_acara', $t)->Where("status", '1')->get()->count();
        $nonaktif = acara::where('id_user_acara', $t)->Where("status", '2')->get()->count();
        $lastacara = acara::where('id_user_acara', $t)->orderBy('created_at', 'desc')->first();
        $last1 = $lastacara->id_acara;
        $last = TamuAcara::where('id_acara', $last1)->first()->count();
        return view('useracara.dashboard')
        ->with('datas',$datas)
        ->with('aktif',$aktif)
        ->with('nonaktif',$nonaktif)
        ->with('last',$last)
        ;
    }
}
