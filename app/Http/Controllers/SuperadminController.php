<?php

namespace App\Http\Controllers;

use App\Models\acara;
use App\Models\TamuUnit;
use App\Models\Unit;
use App\Models\UserManage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SuperadminController extends Controller
{
    public function index()
    {
        $usermC = UserManage::count();
        $unitmC = Unit::count();
        $acaramC = acara::count();
        return view('superadmin.dashboard', ['usermC' => $usermC,
                                             'acaramC' => $acaramC,
                                             'unitmC' => $unitmC]);
    }
    public function usermanage()
    {
        $userm = UserManage::all();
        $usermC = UserManage::count();
        return view('superadmin.usermanage', ['userm' => $userm]);
    }
    public function acaramanage()
    {
        $acaram = acara::all();
        return view('superadmin.acaramanage', ['acaram' => $acaram]);
    }
    public function unitmanage()
    {
        $unitm = Unit::all();
        return view('superadmin.unitmanage', ['unitm' => $unitm]);
    }

    public function storeUser(Request $request){
    
        $userm = new UserManage;
        $userm->name = $request->name;
        $userm->username = $request->username;
        $userm->email = $request->email;
        $userm->password = Hash::make($request->password);
        $userm->level = $request->level;
        $userm->status = $request->status;
        $userm->save();
        return redirect()->back()->with('message','New Data  '. $userm['name'] .'  has been Add successfully');
    }
    public function storeUnit(Request $request){

    
        $unitm = new Unit();
        $unitm->nama_unit = $request->namaunit;
        $unitm->username = $request->username;
        $unitm->password = Hash::make($request->password);
        $unitm->status = $request->status;
        $unitm->email_unit = $request->email;
        $unitm->keterangan = $request->ket;
        $unitm->save();
        return redirect()->back()->with('message','New Data  '. $unitm['nama_unit'] .'  has been Add successfully');
    }

    public function editUser($id)
    {
        $usermcatch = UserManage::find($id);
        return response()->json([
            'status'=>200,
            'usermcatch'=> $usermcatch
        ]);
    }
    public function acaramcatch($id)
    {
        $acaramcatch = acara::with('usermanage')->where('id_acara', $id)->first();
        //dd($acaramcatch);
        return response()->json([
            'status'=>200,
            'acaramcatch'=> $acaramcatch
        ]);
    }
    public function unitmcatch($id)
    {
        $unitmcatch = Unit::find($id);
        return response()->json([
            'status'=>200,
            'unitmcatch'=> $unitmcatch
        ]);
    }

    public function updateUser(Request $request){

        $userm1_id = $request->userm1_id;
        $userm = UserManage::find($userm1_id);
        $userm->name = $request->name;
        $userm->username = $request->username;
        $userm->email = $request->email;
        $userm->password = Hash::make($request->password);
        $userm->level = $request->level;
        $userm->update();
        return redirect()->back()->with('message','New Data  '. $userm['name'] .'  has been Updated successfully');
    }
    public function updateUnit(Request $request){

        $unitm1_id = $request->unitm1_id;
        $unitm = Unit::find($unitm1_id);
        $unitm->nama_unit = $request->namaunit;
        $unitm->username = $request->username;
        $unitm->password = Hash::make($request->password);
        $unitm->status = $request->status;
        $unitm->email_unit = $request->email;
        $unitm->keterangan = $request->ket;
        $unitm->update();
        return redirect()->back()->with('message','New Data  '. $unitm['nama_unit'] .'  has been Updated successfully');
    }

    public function deleteUser(Request $request)
    {

        $userm1_id = $request->dlt_userm1_id;
        $userm = UserManage::find($userm1_id);
        $userm->delete();
        return redirect()->back()->with('message',' Data  '. $userm['name'] .'  has been Delete successfully');

    }
    public function deleteAcaram(Request $request)
    {

        $acaram1_id = $request->dlt_acaram1_id;
        $acaram = acara::find($acaram1_id);
        $acaram->delete();
        return redirect()->back()->with('message',' Data  '. $acaram['nama_acara'] .'  has been Delete successfully');

    }
    public function deleteUnit(Request $request)
    {

        $unitm1_id = $request->dlt_unitm1_id;
        $unitm1_id = Unit::find($unitm1_id);
        $unitm1_id->delete();
        return redirect()->back()->with('message',' Data  '. $unitm1_id['nama_unit'] .'  has been Delete successfully');

    }

}
