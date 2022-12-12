<?php

namespace App\Http\Controllers;

use App\Models\BukuTamuAcara;
use App\Models\BukuTamuUnit;
use Illuminate\Http\Request;
use App\Models\TamuUnit;
use App\Models\TamuAcara;
use PhpParser\Node\Stmt\Return_;

class securityController extends Controller
{
    public function dashboard()
    {
        $BukuTamuAcara = BukuTamuAcara::get()->count();
        $BukuTamuUnit = BukuTamuUnit::get()->count();
        return view('security.dashboard')
        ->with('BukuTamuAcara',$BukuTamuAcara)
        ->with('BukuTamuUnit',$BukuTamuUnit)
        ;
    }
    public function scan()
    {
        return view('security.scan');
    }
    public function qrcode_view()
    {
        // $tamuunit = DB::table('tamu_units')->where('id_tamu_unit', $_GET['idT'])->get();
        $tamuunit = TamuUnit::with('unit')->where("id_tamu_unit", $_GET['idT'])->first();
            if ($tamuunit == null){
                $tamuacara = TamuAcara::with('acara')->where("id_tamu_acara", $_GET['idT'])->first();
                if($tamuacara->status == 1){
                    return view('security.qrcode-view')
                    ->with('tamuacara',$tamuacara)
                    ->with('tamuunit','null')
                ;
                }
                return view('security.qrcode-view')
                ->with('tamuunit','null')
                ->with('tamuacara','null')
                ;
            }
            if($tamuunit->status == 1){
                return view('security.qrcode-view')
                ->with('tamuunit',$tamuunit)
                ->with('tamuacara','null')
                ;
            }
            return view('security.qrcode-view')
            ->with('tamuunit','null')
            ->with('tamuacara','null')
            ;
    }
    public function validasiQrcode(Request $request){

        // dd($request->qr_code);
        $tamuunit = TamuUnit::where("id_tamu_unit", $request->qr_code)->first();

        if ($tamuunit == null){
            $tamuacara = TamuAcara::where("id_tamu_acara", $request->qr_code)->first();
            if ($tamuacara == null) {
                return response()->json([
                    "status_error"=>"data tidak ada"
                ]);
            }
            if($tamuacara->status==1){
                return response()->json([
                    "tamuacara" => "data ada",
                ]);
            }

            return response()->json([
                "dataada" => "data sudah cek in",
            ]);
        }
        if($tamuunit->status==1){
            return response()->json([
                "tamuunit" => "data ada",
            ]);
        }
        return response()->json([
            "dataada" => "data sudah cek in",
        ]);
        // $tamuunit->update({
            // dd($tamuunit);
        // });
        // return Redirect::route('clients.show, $id')->with( ['data' => $data] );
        // return redirect('qrcode_view')->with('tamuunit' , $tamuunit);
        // return redirect()->$tamuunit->route('qrcode_view');
        // return redirect()->route('qrcode_view');
        // return redirect()->route('qrcode_view',['tamuunit' => $tamuunit,]);
        // return redirect()->route('qrcode_view')->'tamuunit' => $tamuunit;
        // return redirect()->route('qrcode_view')->with(['tamuunit' => $tamuunit,]);
        // return view('security.qrcode-view', ['tamuunit' => $tamuunit,]);
        // return view('security.qrcode-view'. compact('tamuunit'));
        // $tamuunit = $tamuunit;
        // return view('security.qrcode-view'. compact($tamuunit));
        // return view('security.qrcode-view', ['tamuunit' => $tamuunit,]);
    }
    public function datatamuunit(){
        $data = BukuTamuUnit::with('TamuUnit.unit')->get();
        return view('security.tamuunit')->with('data',$data);
    }
    public function datatamuacara(){
        $data = BukuTamuAcara::with('TamuAcara.acara')->get();
        return view('security.tamuacara')->with('data',$data);
    }
//
    public function COunit(Request $request){
        BukuTamuUnit::where('id_buku_tamu_unit', $request->id_buku_tamu_unit)
        ->update(['cek_out' => now(),'id_user_co'=> $request->id_user]);
        return redirect('security/datatamuunit');
    }
    public function COacara(Request $request){
        BukuTamuAcara::where('id_buku_tamu_acara', $request->id_buku_tamu_acara)
        ->update(['cek_out' => now(),'id_user_co'=> $request->id_user]);
        return redirect('security/datatamuacara');
    }
    public function e_nobadge_tu(Request $request){
        BukuTamuUnit::where('id_buku_tamu_unit', $request->id_buku_tamu_unit)
        ->update(['no_badge' => $request->no_badge]);
        return redirect('security/datatamuunit');
    }
    public function e_nobadge_ta(Request $request){
        BukuTamuAcara::where('id_buku_tamu_acara', $request->id_buku_tamu_acara)
        ->update(['no_badge' => $request->no_badge]);
        return redirect('security/datatamuacara');
    }
}
