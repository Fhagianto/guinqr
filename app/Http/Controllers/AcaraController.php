<?php

namespace App\Http\Controllers;

use App\Models\acara;
use App\Models\BukuTamuAcara;
use App\Models\TamuAcara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller
class AcaraController extends Controller
{
    public function index()
    {
        // $datas = acara::all();
        // $units = Unit::where("status", '1')->get();
        $t=Auth::guard('user')->user()->id;
        // $tamuunitl = acara::with('unit')->where('id_user_acara', $t)->get();
        $datas = acara::where('id_user_acara', $t)->Where("status", '1')->orWhere("status", '2')->get();
        $cekin = TamuAcara::Where("status", '2')->get();
        return view('useracara.acara', compact(
            'datas','cekin'
        ));
    }

    public function create()
    {
        $model = new acara;
        return view('useracara.acara-create', compact(
            'model'
        ));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $model = new acara;
        $model->nama_acara = $request->nama_acara;
        $model->keterangan = $request->keterangan;
        $model->email_acara = $request->email_acara;
        $model->tgl_start = $request->tgl_start;
        $model->tgl_end = $request->tgl_end;
        $model->id_user_acara = $user->id;
        $model->status=$request->status;
        $model->save();

        return redirect('acara');
    }

    public function show($id)
    {
        $acara = acara::where('id_acara', $id)->first();
        $tamu = BukuTamuAcara::with('TamuAcara.acara')
        ->whereRelation('TamuAcara.acara','id_acara', $id)
        ->count();
        $btamu = BukuTamuAcara::with('TamuAcara.acara')
        ->whereRelation('TamuAcara.acara','id_acara', $id)
        ->get();
        return view('useracara.acara-show')
        ->with('acara',$acara)
        ->with('tamu',$tamu)
        ->with('btamu',$btamu)
        ;
    }

    public function edit($id)
    {
        $model = acara::find($id);
        return view('useracara.acara-edit', compact(
            'model'
        ));
    }

    public function update(Request $request, $id)
    {
        $model = acara::find($id);
        $model->nama_acara = $request->nama_acara;
        $model->keterangan = $request->keterangan;
        $model->email_acara = $request->email_acara;
        $model->tgl_start = $request->tgl_start;
        $model->tgl_end = $request->tgl_end;
        $model->status=$request->status;
        $model->save();

        return redirect('acara');
    }

    public function destroy($id)
    {
        acara::where('id_acara', $id)
        ->update(['status' => '3']);

        return redirect('acara');
    }
}
