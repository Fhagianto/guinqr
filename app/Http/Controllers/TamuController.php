<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\TamuUnit;

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
    public function qr_view()
    {
        return view('tamu\qrcode');
    }

    public function generate ($id)
    {
        $data = TamuUnit::findOrFail($id);
        $qrcode = QrCode::size(400)->generate(bcrypt($data->name));
        return view('tamu\qrcode',compact('qrcode'));
    }
    public function StoreTamuUnit(Request $request)
    {
        $model = new TamuUnit;
        $model->nama_acara = $request->nama_acara;
        $model->keterangan = $request->keterangan;
        $model->email_acara = $request->email_acara;
        $model->tgl_start = $request->tgl_start;
        $model->tgl_end = $request->tgl_end;
        $model->save();

        return redirect('acara');
    }
}
