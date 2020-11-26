<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class sdm extends Controller
{
    public function index()
    {
        $status = DB::table('sdm_status')->get();
        $sekolah   = DB::table('sdm_sekolah')->get();
        $jurusan   = DB::table('sdm_jurusan')->get();
        $data  = DB::table('sdm_karyawan as a')
                ->join('sdm_status as b','a.id_sdm_status','=','b.id_sdm_status')
                ->join('sdm_sekolah as c','a.id_sekolah','=','c.id_sekolah')
                ->join('sdm_jurusan as d','a.id_sdm_jurusan','=','d.id_sdm_jurusan')
                ->orderBy('a.id_karyawan','DESC')
                ->select(DB::raw('a.*, year(curdate()) - year(a.tgl_lahir) - (right(curdate(),5) < right(a.tgl_lahir, 5)) as umur,DATEDIFF(a.selesai_kerja , a.mulai_kerja) as lama_hari,b.*,c.*,d.*'))
                ->paginate(20);
        return view('sdm/data_sdm',compact('data','sekolah','status','jurusan'));
    }
    public function master()
    {
        $status = DB::table('sdm_status as a')
                ->orderBy('a.id_sdm_status','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $sekolah = DB::table('sdm_sekolah as a')
                ->orderBy('a.id_sekolah','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $jurusan = DB::table('sdm_jurusan as a')
                ->orderBy('a.id_sdm_jurusan','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        return view('sdm/master_sdm',compact('status','sekolah','jurusan'));
    }
    public function cari(Request $request)
	{
        $status = DB::table('sdm_status')->get();
        $sekolah   = DB::table('sdm_sekolah')->get();
        $jurusan   = DB::table('sdm_jurusan')->get();
        $cnm = $request->cnm;
        $cst = $request->cst;
        $cas = $request->cas;
        $cjr = $request->cjr;
        $csa = $request->csa;
        $cus = $request->cus;
        $ctg = $request->ctg;

        $data  = DB::table('sdm_karyawan as a')
                ->join('sdm_status as b','a.id_sdm_status','=','b.id_sdm_status')
                ->join('sdm_sekolah as c','a.id_sekolah','=','c.id_sekolah')
                ->join('sdm_jurusan as d','a.id_sdm_jurusan','=','d.id_sdm_jurusan')
                ->orderBy('a.id_karyawan','DESC')
                ->select(DB::raw('a.*, year(curdate()) - year(a.tgl_lahir) - (right(curdate(),5) < right(a.tgl_lahir, 5)) as umur,DATEDIFF(a.selesai_kerja , a.mulai_kerja) as lama_hari,b.*,c.*,d.*'))
        ->when($cnm,function ($q) use ($cnm){
            return $q->where('nama_karyawan','like',"%".$cnm."%");
        })
        ->when($cst,function ($q) use ($cst){
            return $q->where('a.id_sdm_status','like',"%".$cst."%");
        })
        ->when($cas,function ($q) use ($cas){
            return $q->where('a.id_sekolah','like',"%".$cas."%");
        })
        ->when($cjr,function ($q) use ($cjr){
            return $q->where('a.id_sdm_jurusan','like',"%".$cjr."%");
        })
        ->paginate();
        // dd($ckel);
        return view('sdm/data_sdm',compact('data','sekolah','status','jurusan'));
    }
    public function detail(request $req,$id=""){
        $data  = DB::table('sdm_karyawan as a')
                ->join('sdm_status as b','a.id_sdm_status','=','b.id_sdm_status')
                ->join('sdm_sekolah as c','a.id_sekolah','=','c.id_sekolah')
                ->join('sdm_jurusan as d','a.id_sdm_jurusan','=','d.id_sdm_jurusan')
                ->orderBy('a.id_karyawan','DESC')
                ->select(DB::raw('a.*, year(curdate()) - year(a.tgl_lahir) - (right(curdate(),5) < right(a.tgl_lahir, 5)) as umur,DATEDIFF(a.selesai_kerja , a.mulai_kerja) as lama_hari,b.*,c.*,d.*'))
                ->where('a.id_karyawan',$id)
                ->get();
        // dd($det);
        return view('sdm/detail_sdm',compact('data'));
    }
    function form($id="")
    { 
        if($id==""){
            $data ="";
            $status = DB::table('sdm_status')->get();
            $sekolah   = DB::table('sdm_sekolah')->get();
            $jurusan   = DB::table('sdm_jurusan')->get();
        }else{
            $data  = DB::table('sdm_karyawan as a')
                    ->join('sdm_status as b','a.id_sdm_status','=','b.id_sdm_status')
                    ->join('sdm_sekolah as c','a.id_sekolah','=','c.id_sekolah')
                    ->join('sdm_jurusan as d','a.id_sdm_jurusan','=','d.id_sdm_jurusan')
                    ->orderBy('a.id_karyawan','DESC')
                    ->select(DB::raw('a.*,b.*,c.*,d.*'))
                    ->where('a.id_karyawan',$id)
                    ->first();
            $status = DB::table('sdm_status')->get();
            $sekolah   = DB::table('sdm_sekolah')->get();
            $jurusan   = DB::table('sdm_jurusan')->get();
            
        }
        // dd($data);
            return view('sdm/form_sdm',compact ('data','id','status','sekolah','jurusan'));
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
            //add
            $hari = date(Carbon::now('Asia/Jakarta'));
            Pelanggan::create([
                "tgl_gabung" => $hari,
                "nama_pelanggan" => $req->nama,
                "no_ktp" => $req->ktp,
                "tgl_lahir" => $req->tgl_lahir,
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
            $hari = date(Carbon::now('Asia/Jakarta'));
            Pelanggan::where("id_pelanggan",$id)->update([
                "nama_pelanggan" => $req->nama,
                "no_ktp" => $req->ktp,
                "tgl_lahir" => $req->tgl_lahir,
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
}
