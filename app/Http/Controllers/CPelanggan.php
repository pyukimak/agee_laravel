<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

class CPelanggan extends Controller
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
        $data  = DB::table('servis_pelanggan as a')
                ->orderBy('a.id_pelanggan','DESC')
                ->select(DB::raw('a.*, year(curdate()) - year(a.tgl_lahir) - (right(curdate(),5) < right(a.tgl_lahir, 5)) as umur'))
                ->paginate(20);
        $total = Pelanggan::count();
        return view('pelanggan/data_pelanggan',compact('data','total','jkel','agama','kerja','kel'));
    }
    public function kelompok()
    {    
        $data  = DB::table('kelompok_pelanggan as a')
                ->orderBy('a.id_kelompok','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        // $total = Pelanggan::count();
        return view('pelanggan/data_kelompok',compact('data'));
    }

    public function cari(Request $request)
	{
        $jkel  = DB::table('servis_jkel')->get();
        $agama = DB::table('servis_agama')->get();
        $kerja = DB::table('servis_kerja')->get();
        $kel   = DB::table('kelompok_pelanggan')->get();
		$carikd = $request->carikd;
		$carinm = $request->carinm;
		$carink = $request->carink;
        $carint = $request->carint;
        $ckel = $request->ckel;
        $cjke = $request->cjke;
        $cker = $request->cker;
        $caga = $request->caga;

        $data = Pelanggan::when($carikd,function ($q) use ($carikd){
            return $q->where('kd_pelanggan','like',"%".$carikd."%");
        })
        ->when($carinm,function ($q) use ($carinm){
            return $q->where('nama_pelanggan','like',"%".$carinm."%");
        })
        ->when($carink,function ($q) use ($carink){
            return $q->where('no_ktp','like',"%".$carink."%");
        })
        ->when($carint,function ($q) use ($carint){
            return $q->where('no_sms','like',"%".$carint."%");
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
        // dd($ckel);
        $total = $data->count();
        return view('pelanggan/data_pelanggan',compact('data','total','jkel','agama','kerja','kel'));
 
    }
    public function carisemua(Request $request)
    {
        $cari = $request->cari;
        $data = DB::table('servis_pelanggan')
        ->where('kd_pelanggan','like',"%".$cari."%")
        ->orWhere('nama_pelanggan', 'like', '%' . $cari . '%')
        ->orWhere('tgl_lahir', 'like', '%' . $cari . '%')
        ->orWhere('alamat', 'like', '%' . $cari . '%')
        ->orWhere('ket', 'like', '%' . $cari . '%')
        ->orWhere('no_sms', 'like', '%' . $cari . '%')
        ->orderBy('id_pelanggan', 'desc')
        ->paginate();
        $total = $data->count();
        return view('pelanggan/data_pelanggan',compact('data','total'));
    }
    public function detail(request $req,$id=""){
         $det  = DB::table('servis_pelanggan as a')
                   ->join('servis_jkel as b','a.id_jkel','=','b.id_jkel')
                   ->join('servis_agama as c','a.id_agama','=','c.id_agama')
                   ->join('servis_kerja as d','a.id_kerja','=','d.id_kerja')
                   ->join('kelompok_pelanggan as e','a.id_kelompok','=','e.id_kelompok')
                    ->select(DB::raw('a.*, year(curdate()) - year(a.tgl_lahir) - (right(curdate(),5) < right(a.tgl_lahir, 5)) as umur,b.* , c.nama_agama , d.nama_kerja , e.nama_kelompok'))
                   ->where('a.id_pelanggan',$req->id_pelanggan)
                   ->get();
        $jkel  = DB::table('servis_jkel')->get();
        $agama = DB::table('servis_agama')->get();
        $kerja = DB::table('servis_kerja')->get();
        $kel   = DB::table('kelompok_pelanggan')->get();
        $group = DB::table('sms_group')->get();
        // dd($det);
        return view('pelanggan/detail_pelanggan',compact('det','id','jkel','agama','kerja','kel','group'));
    }

    function form($id=""){ 
    if($id==""){
        $data      = "";
        $jkel      = DB::table('servis_jkel')->get();
        $agama     = DB::table('servis_agama')->get();
        $kerja     = DB::table('servis_kerja')->get();
        $kel       = DB::table('kelompok_pelanggan')->get();
        $group     = DB::table('sms_group')->get();
        $gp_det    = 0;
        $thn_lahir = '';
        $bln_lahir = '';
        $tgl_lahir = '';
    }else{
        // $data = Pelanggan::where("id_pelanggan",$id)->first();
        $data    = DB::table('servis_pelanggan as a')
                   ->join('servis_jkel as b','a.id_jkel','=','b.id_jkel')
                   ->join('servis_agama as c','a.id_agama','=','c.id_agama')
                   ->join('servis_kerja as d','a.id_kerja','=','d.id_kerja')
                   ->join('kelompok_pelanggan as e','a.id_kelompok','=','e.id_kelompok')
                //    ->join('sms_detail_group as f','a.id_pelanggan','=','f.id_pelanggan')
                //    ->join('sms_group as g','f.id_group','=','g.id_group')
                   ->select(DB::raw('a.*,b.*,c.nama_agama,d.nama_kerja,e.nama_kelompok,year(a.tgl_lahir) as tahun_lahir,month(a.tgl_lahir) as bulan_lahir, day(a.tgl_lahir) as tanggal_lahir'))
                   ->where('a.id_pelanggan',$id)
                   ->first();
        
        $jkel     = DB::table('servis_jkel')->get();
        $agama    = DB::table('servis_agama')->get();
        $kerja    = DB::table('servis_kerja')->get();
        $kel      = DB::table('kelompok_pelanggan')->get();
        $group    = DB::table('sms_group')->get();
        $gp_det   = DB::table('sms_detail_group')
                    ->where('id_pelanggan',$id)
                    ->count();
        $thn_lahir = $data->tahun_lahir;
        $bln_lahir = $data->bulan_lahir;
        $tgl_lahir = $data->tanggal_lahir;
        
    }
    // dd($data);
        return view('pelanggan/form_pelanggan',compact ('data','id','jkel','agama','kerja','kel','group','gp_det','thn_lahir','bln_lahir','tgl_lahir'));
    }
    function simpan(request $req,$id="")
    {
         if($req->file('foto')){
            $file = $req->file('foto');
            $nama_foto = date("Y-m-d").$file->getClientOriginalName();
        }else{
            $nama_foto =$req->old_foto;
        }
        // dd($req->boolean('group_9'));
        if($id==""){
            $lahir = ''.$req->tahun.'-'.$req->bulan.'-'.$req->tanggal.'';
            
            $hari  = date(Carbon::now('Asia/Jakarta'));
            Pelanggan::create([
                "tgl_gabung" => $hari,
                "nama_pelanggan" => $req->nama,
                "no_ktp" => $req->ktp,
                "tgl_lahir" => $lahir,
                "kd_pelanggan" =>'',
                "acak" =>'',
                "alamat" => $req->alamat,
                "no_sms" => $req->telp,
                "ket" => $req->wa,
                "id_kelompok" => $req->kel,
                "email_pelanggan" => $req->email,
                "titik_google" => $req->koor,
                "ket_lain" => $req->lain,
                "id_jkel" => $req->jkel,
                "id_agama" => $req->agama,
                "id_kerja" => $req->pekerjaan,
                "foto" => $nama_foto,
            ]);
            // dd($req);
            $kode = DB::table('servis_pelanggan')->orderBy('id_pelanggan','desc')->limit(1)->first();
            Pelanggan::where("id_pelanggan",$kode->id_pelanggan)->update([
                "kd_pelanggan" => "P".$kode->id_pelanggan,
            ]);
            
            // KIRIM KE DB GROUP
            $db_group = DB::table('sms_group')->get();
            foreach ($db_group as $dg) {
                $att = 'group_'.$dg->id_group;
                $at_nama = $req->boolean($att);
                if($at_nama == true){
                    DB::table('sms_detail_group')->insert([
                        'id_pelanggan' => $kode->id_pelanggan,
                        'id_group'     => $dg->id_group
                    ]);
                }            
            }
            // KIRIM KE DB GROUP END
            // }else{
            //     DB::table("sms_detail_group")->insert([
            //         "id_group"     => $req->group[0],
            //         "id_pelanggan" => $kode->id_pelanggan,
            //         "wa_time"      => NULL 
            //     ]);
            // }
            // KIRIM KE DB GROUP END

        }else{
            //edit
            // dd($req);
            $lahir = ''.$req->tahun.'-'.$req->bulan.'-'.$req->tanggal.'';
            $hari = date(Carbon::now('Asia/Jakarta'));
            Pelanggan::where("id_pelanggan",$id)->update([
                "nama_pelanggan" => $req->nama,
                "no_ktp" => $req->ktp,
                "tgl_lahir" => $lahir,
                "acak" =>'',
                "alamat" => $req->alamat,
                "no_sms" => $req->telp,
                "ket" => $req->wa,
                "id_kelompok" => $req->kel,
                "email_pelanggan" => $req->email,
                "titik_google" => $req->koor,
                "ket_lain" => $req->lain,
                "id_jkel" => $req->jkel,
                "id_agama" => $req->agama,
                "id_kerja" => $req->pekerjaan,
                "foto" => $nama_foto,
            ]);
            

            // KIRIM KE DB GROUP
            $db_group = DB::table('sms_group')->get();
            foreach ($db_group as $dg) {
                $att = 'group_'.$dg->id_group;
                $at_nama = $req->boolean($att);
                if($at_nama == true){
                    DB::table('sms_detail_group')->where('id_pelanggan',$id)->delete();
                    DB::table('sms_detail_group')->insert([
                        'id_pelanggan' => $kode->id_pelanggan,
                        'id_group'     => $dg->id_group
                    ]);
                }            
            }
            // KIRIM KE DB GROUP END
            
        }

        if($req->file('foto')){
            $file->move(public_path()."/uploads",$nama_foto);
        }
        return redirect(url("pelanggan"))->with("status","Data Saved !");
    }

    function hapus($id)
    {
        Pelanggan::where("id_pelanggan",$id)->delete();
        return redirect(url("pelanggan"))->with("status","Data Deleted");
    }
    public function verif(Request $req){
        $telp      = $req->telp;
        $cari_telp = DB::table('servis_pelanggan')
                    ->where('ket',$telp)
                    ->orWhere('no_sms',$telp)
                    ->get();
       return json_encode($cari_telp);
    }
}
