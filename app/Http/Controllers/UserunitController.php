<?php

namespace App\Http\Controllers;

use App\Models\TamuAcara;
use App\Models\TamuUnit;
use App\Models\Unit;
use App\Models\BukuTamuUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserunitController extends Controller
{
    public function dashboard()
    {

        $t=Auth::guard('unit')->user()->id_unit;
        $datas = TamuUnit::where('id_unit', $t)->get()->count();
        $i = BukuTamuUnit::with('TamuUnit')->whereRelation('TamuUnit','id_unit', $t)->get()->count();
        return view('userunit.dashboard')
        ->with('datas',$datas)
        ->with('i',$i)
        ;
        return view('userunit.dashboard');
    }
    public function tamuunitList(Request $request)
    {
        $t=Auth::guard('unit')->user()->id_unit;
        $tamuunitl = BukuTamuUnit::with('TamuUnit.unit')->whereRelation('TamuUnit.unit', 'id_unit',$t)->get();
        $unitshow = Unit::all()->where('id_unit', $t)->first();
        $count = BukuTamuUnit::with('TamuUnit.unit')->whereRelation('TamuUnit.unit', 'id_unit', $t)->count();
        return view('userunit.tamuunit-list', ['tamuunitl' => $tamuunitl, 'unitshow' => $unitshow, 'count' => $count]);
    }

    public function tamuacaraList(Request $request)
    {
        $tamuacaral = TamuAcara::all();
        return view('userunit.tamuacara-list', ['tamuacaral' => $tamuacaral]);
    }

    public function tamuunitListUpdate(Request $request){
        $t = Auth::guard('unit')->user()->id_unit;
        $ta = Unit::find($t);
        $ta->status = $request->status;
        $ta->update();
        return redirect()->back()->with('message','New Status has been Updated successfully');
    }
    public function tamuacaraListcatch($id)
    {
        $tamuacaraListcatch = TamuAcara::with('acara')->where('id_acara', $id)->first();
        return response()->json([
            'status'=>200,
            'tamuacaraListcatch'=> $tamuacaraListcatch
        ]);

    }
}
//
