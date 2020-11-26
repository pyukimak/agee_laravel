<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class CKontak extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jkel  = DB::table('servis_jkel')->get();
        $agama = DB::table('servis_agama')->get();
        $kerja = DB::table('servis_kerja')->get();
        $kel   = DB::table('kelompok_pelanggan')->get();
        $data  = DB::table('servis_pelanggan_lain as a')
                ->orderBy('a.id_pelanggan','DESC')
                ->select(DB::raw('a.*, year(curdate()) - year(a.tgl_lahir) - (right(curdate(),5) < right(a.tgl_lahir, 5)) as umur'))
                ->paginate(10);
        $total = Kontak::count();
        return view('pelanggan/data_kontak',compact('data','total','jkel','agama','kerja','kel'));
    }

    public function carisemua(Request $request)
    {
        $cari = $request->cari;
        $data = DB::table('servis_pelanggan_lain')
        ->where('id_kelompok','like',"%".$cari."%")
        ->orWhere('nama_pelanggan', 'like', '%' . $cari . '%')
        ->orWhere('no_ktp', 'like', '%' . $cari . '%')
        ->orWhere('alamat', 'like', '%' . $cari . '%')
        ->orWhere('ket_1', 'like', '%' . $cari . '%')
        ->orWhere('ket_2', 'like', '%' . $cari . '%')
        ->orWhere('ket_3', 'like', '%' . $cari . '%')
        ->orWhere('telp', 'like', '%' . $cari . '%')
        ->orderBy('id_pelanggan', 'desc')
        ->paginate();
        $total = $data->count();
        return view('pelanggan/data_kontak',compact('data','total'));
    }
    public function cari(Request $request)
	{
        $jkel  = DB::table('servis_jkel')->get();
        $agama = DB::table('servis_agama')->get();
        $kerja = DB::table('servis_kerja')->get();
        $kel   = DB::table('kelompok_pelanggan')->get();
		$cariid = $request->cariid;
		$carinm = $request->carinm;
		$carink = $request->carink;
        $carint = $request->carint;

        $data = Kontak::when($cariid,function ($q) use ($cariid){
            return $q->where('id_pelanggan','like',"%".$cariid."%");
        })
        ->when($carinm,function ($q) use ($carinm){
            return $q->where('nama_pelanggan','like',"%".$carinm."%");
        })
        ->when($carink,function ($q) use ($carink){
            return $q->where('no_ktp','like',"%".$carink."%");
        })
        ->when($carint,function ($q) use ($carint){
            return $q->where('telp','like',"%".$carint."%");
        })
        ->when($ckel,function ($q) use ($ckel){
            return $q->where('id_kelompok','like',"%".$ckel."%");
        })
        ->when($cjke,function ($q) use ($cjke){
            return $q->where('id_jkel','like',"%".$cjke."%");
        })
        ->when($cker,function ($q) use ($cker){
            return $q->where('id_kerja','like',"%".$cker."%");
        })
        ->when($caga,function ($q) use ($caga){
            return $q->where('id_agama','like',"%".$caga."%");
        })
        ->paginate();
        $total = $data->count();
        return view('data_kontak',compact('data','total','jkel','agama','kerja','kel'));
    }
    public function simpan(Request $request,$id=""){
        $data = Kontak::orderBy('id_pelanggan', 'desc')->paginate(10);
        $total = Kontak::count();
        if($id==""){
        Kontak::create([
            'nama_pelanggan' => $request->nama,
            'no_ktp' => $request->ktp,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'ket_1' => $request->ket1,
            'ket_2' => $request->ket2,
            'ket_3' => $request->ket3,
        ]);
        }else{
             Kontak::where("id_pelanggan",$id)->update([
            'nama_pelanggan' => $request->nama,
            'no_ktp' => $request->ktp,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'ket_1' => $request->ket1,
            'ket_2' => $request->ket2,
            'ket_3' => $request->ket3,
             ]);
        }
        return redirect(url("kontak"))->with("status","Data Saved !");

    }
    function hapus($id)
    {
        Kontak::where("id_pelanggan",$id)->delete();
        return redirect(url("kontak"))->with("status","Data Deleted");
    }

    function cari_data_ajax(Request $a){
        $d = Kontak::where('id_pelanggan',$a->id)->first();
        return json_encode($d);
    }
}
