<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\TamuUnit;
use App\Models\BukuTamuUnit;
use App\Models\acara;
use App\Models\TamuAcara;
use App\Models\BukuTamuAcara;
use App\Models\Unit;
use Database\Seeders\tamuacara as SeedersTamuacara;
use Illuminate\Support\Str;
use Illuminate\Database\Query\Builder;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class TamuController extends Controller
{
    public function tamu_unit()
    {
        // $units = DB::table('units')->get();
        $units = Unit::where("status", '1')->get();
        return view('tamu\tamu-unit', ['units' => $units,]);
    }

    public function tamu_acara()
    {
        // $acaras = acara::get();
        $acaras = acara::where("status", '1')->get();
        return view('tamu\tamu-acara',
        ['acaras' => $acaras,]
        );
    }

    public function create_tamu_unit(Request $request)
    {
        $model = new TamuUnit;
        $model->nama = $request->inputNama;
        $model->no_telpon = $request->inputTelpon;
        $model->email = $request->inputEmail;
        $model->keperluan = $request->inputKeperluan;
        $model->instansi = $request->inputInstansi;
        $model->id_unit = $request->inputTujuan;
        $model->tgl = $request->inputTanggal;
        $model->status="1";
        $model->save();
        $model->id_tamu_unit;
        return view('tamu.qrcode'
        // . compact('qrcode')
        , ['tamu' => $model->id_tamu_unit]
        );
        // $tamu_unit =[
        //     [
        //         'nama' => $request->inputNama,
        //         'no_telpon' => $request->inputTelpon,
        //         'email' => $request->inputEmail,
        //         'keperluan' => $request->inputKeperluan,
        //         'instansi' => $request->inputInstansi,
        //         'id_unit' => $request->inputTujuan,
        //         'tgl' => $request->inputTanggal,
        //         'tokenqr_id' => Str::random(30),
        //         'tokenqr_ps' => Str::random(60),
        //     ],
        //     ];
        // foreach ($tamu_unit as $key => $value) {
        //     TamuUnit::create($value);
        // }
        // $tamu = DB::table('tamu_units')
        // ->where('tokenqr_id', $model->tokenqr_id)
        // ->where('tokenqr_ps', $model->tokenqr_ps)
        // ->orderBy('id_tamu_unit', 'DESC')
        // ->get();
        // $tamu1= array($tamu);
        // $tamu = DB::select('select * from tamu_units where tokenqr_id = ? and tokenqr_ps = ?', [$model->tokenqr_id, $model->tokenqr_ps]);
        // ->orderBy('id', 'DESC');
        //$posts = Post::orderBy('id', 'DESC')->get();
        // $tamu = TamuUnit::select('tokenqr_id', $model->tokenqr_id, 'tokenqr_ps', $model->tokenqr_ps)->orderBy('id_tamu_unit', 'DESC')->get();
        // $tamu = TamuUnit::select()->where('tokenqr_id', $model->tokenqr_id)->where('tokenqr_ps', $model->tokenqr_ps)->orderBy('id_tamu_unit', 'DESC')->first();
        // compact('tamu');
        // $sites = Site::select('code_site')->orderBy('code_site','desc')->get();
        // $test = $tamu->id_tamu_unit;
        // $id = $model->id;
        // $model->id_tamu_unit;
        // dd($id);
        // $qrcode = QrCode::size(250)->generate($model->id);
    }

    public function create_tamu_acara(Request $request)
    {
        $id = IdGenerator::generate(['table' => 'tamu_acaras', 'length' => 15, 'prefix' =>"TA-".date('ymd')]);
        $model = new TamuAcara;
        $model->id_tamu_acara= $id;
        $model->nama = $request->inputNama;
        $model->no_telpon = $request->inputTelpon;
        $model->email = $request->inputEmail;
        $model->id_acara = $request->inputTujuan;
        $model->status="1";
        $model->save();
        $model->id_tamu_acara;
        return view('tamu.qrcode'
        // . compact('qrcode')
        , ['tamu' => $id]
        );
    }

    public function qr_view()
    {
        return view('tamu\qrcode');
    }

    public function generate ($id)
    {
        // DB::table('tamu_units')->insert([
        //     'nama' => $request->inputNama,
        //     'no_telpon' => $request->inputTelpon,
        //     'email' => $request->inputEmail,
        //     'keperluan' => $request->inputKeperluan,
        //     'instansi' => $request->inputInstansi,
        //     'id_unit' => $request->inputTujuan,
        //     'tgl' => $request->inputTanggal,
        //     'tokenqr_id' => $request->token1,
        //     'tokenqr_ps' => $request->token2,
        // ]);
        $data = TamuUnit::findOrFail($id);
        $qrcode = QrCode::size(400)->generate(bcrypt($data->id));
        return view('tamu\qrcode',compact('qrcode'));
    }

    public function regcekinTU(Request $request){
        $model = new BukuTamuUnit;
        $model->id_tamu_unit = $request->id_tamu_unit;
        $model->cek_in = now();
        $model->cek_out = null;
        $model->no_badge = null;
        $model->id_user_ci = $request->id_user;
        $model->save();
        TamuUnit::where('id_tamu_unit', $request->id_tamu_unit)
        ->update(['status' => "2"]);
        return redirect('security/scan')->with('pesan',"data tamu telah di tambah kan");
    }
    public function regcekinTA(Request $request){
        $model = new BukuTamuAcara();
        $model->id_tamu_acara = $request->id_tamu_acara;
        $model->cek_in = now();
        $model->cek_out = null;
        $model->no_badge = null;
        $model->id_user_ci = $request->id_user;
        $model->save();
        TamuAcara::where('id_tamu_acara', $request->id_tamu_acara)
        ->update(['status' => "2"]);
        return redirect('security/scan')->with('pesan',"data tamu telah di tambah kan");
    }
}
