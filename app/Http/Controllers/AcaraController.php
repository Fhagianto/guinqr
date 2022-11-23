<?php

namespace App\Http\Controllers;

use App\Models\acara;
use App\Models\BukuTamuAcara;
use App\Models\TamuAcara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datas = acara::all();
        // $units = Unit::where("status", '1')->get();
        $datas = acara::Where("status", '1')->orWhere("status", '2')->get();
        $cekin = TamuAcara::Where("status", '2')->get();
        return view('useracara.acara', compact(
            'datas','cekin'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new acara;
        return view('useracara.acara-create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = acara::find($id);
        return view('useracara.acara-edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        acara::where('id_acara', $id)
        ->update(['status' => '3']);

        return redirect('acara');
    }
    // public function dashboard1()
    // {
    //     $BukuTamuAcara = BukuTamuAcara::with('TamuAcara.acara')->count();
    //     $BukuTamuUnit = BukuTamuUnit::with('TamuUnit.unit')->count();
    //     return view('security.dashboard')
    //     ->with('BukuTamuAcara',$BukuTamuAcara)
    //     ->with('BukuTamuUnit',$BukuTamuUnit)
    //     ;
    // }
}
