<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TamuUnit;
use PhpParser\Node\Stmt\Return_;

class securityController extends Controller
{
    public function dashboard()
    {
        return view('security.dashboard');
    }
    public function scan()
    {
        return view('security.scan');
    }
    public function qrcode_view()
    {
        return view('security.qrcode-view');
    }
    public function validasiQrcode(Request $request){

        // dd($request->qr_code);
        $tamuunit = TamuUnit::where("id_tamu_unit", $request->qr_code)->first();

        if ($tamuunit == null){
            return response()->json([
                "status_error"=>"data tidak ada"
            ]);
        }

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
        return view('security.qrcode-view', ['tamuunit' => $tamuunit,]);
        // return view('security.qrcode-view'. compact('tamuunit'));
        // $tamuunit = $tamuunit;
        // return view('security.qrcode-view'. compact($tamuunit));
        // return response()->json([
        //     "berhasil" => "data ada",
        // ]);
        // return view('security.qrcode-view', ['tamuunit' => $tamuunit,]);
    }
}
