<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

class CServis extends Controller
{
    public function index()
    {
        $teknisi  = DB::table('sdm_karyawan')->where('id_sdm_status','5')->get();
        $status = DB::table('servis_status')->get();
        $kategori = DB::table('servis_kategori')->get();
        $merk   = DB::table('servis_merk')->get();
        $pel   = DB::table('servis_pelanggan')->get();
        $data  = DB::table('servis_transaksi as a')
                ->join('servis_det_transaksi as b','a.id_transaksi','=','b.id_transaksi')
                ->join('servis_merk as c','b.id_merk','=','c.id_merk')
                ->join('servis_kategori as d','b.id_kategori','=','d.id_kategori')
                ->join('sdm_karyawan as e','b.id_karyawan','=','e.id_karyawan')
                ->join('servis_pelanggan as f','a.id_pelanggan','=','f.id_pelanggan')
                ->join('servis_status as g','b.status_barang','=','g.id_status')
                ->orderBy('a.id_transaksi','DESC')
                ->select(DB::raw('a.*, b.*,b.ket as ket2,c.*,d.*,e.*,f.*,g.*'))
                ->paginate(20);
        return view('servis/status_servis',compact('data','teknisi','status','kategori','merk','pel'));
    }
    public function master()
    {
        $jasa = DB::table('servis_kategori_jasa as a')
                ->orderBy('a.id_jasa','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $rak = DB::table('tb_rak as a')
                ->orderBy('a.id_rak','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $kondisi = DB::table('tb_kondisipart as a')
                ->orderBy('a.id_kondisipart','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $jenis = DB::table('tb_jenisbrg as a')
                ->orderBy('a.id_jenisbrg','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $kelengkapan = DB::table('tb_kelengkapan as a')
                ->orderBy('a.id_kelengkapan','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $kategori = DB::table('servis_kategori as a')
                ->orderBy('a.id_kategori','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        return view('servis/master_servis',compact('kategori','kelengkapan','jenis','kondisi','rak','jasa'));
    }
    public function masteragenda()
    {
        $jenis = DB::table('agenda_jenis as a')
                ->orderBy('a.id_jenis','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $status = DB::table('agenda_status as a')
                ->orderBy('a.id_status','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        return view('servis/master_agenda',compact('jenis','status'));
    }

    public function cari(Request $request)
	{
        $teknisi  = DB::table('sdm_karyawan')->where('id_sdm_status','5')->get();
        $status = DB::table('servis_status')->get();
        $kategori = DB::table('servis_kategori')->get();
        $merk   = DB::table('servis_merk')->get();
        $pel   = DB::table('servis_pelanggan')->get();
        $csn = $request->csn;
        $csj = $request->csj;
        $ctk = $request->ctk;
        $csb = $request->csb;
        $ckb = $request->ckb;
        $cmr = $request->cmr;
        $cpl = $request->cpl;

        $data  = DB::table('servis_transaksi as a')
                ->join('servis_det_transaksi as b','a.id_transaksi','=','b.id_transaksi')
                ->join('servis_merk as c','b.id_merk','=','c.id_merk')
                ->join('servis_kategori as d','b.id_kategori','=','d.id_kategori')
                ->join('sdm_karyawan as e','b.id_karyawan','=','e.id_karyawan')
                ->join('servis_pelanggan as f','a.id_pelanggan','=','f.id_pelanggan')
                ->orderBy('a.id_transaksi','DESC')
                ->select(DB::raw('a.*, b.*,c.*,d.*,e.*,f.*'))
        ->when($csn,function ($q) use ($csn){
            return $q->where('serial','like',"%".$csn."%");
        })
        ->when($csj,function ($q) use ($csj){
            return $q->where('nota_servis','like',"%".$csj."%");
        })
        ->when($csj,function ($q) use ($csj){
            return $q->where('no_surat_jalan','like',"%".$csj."%");
        })
        ->when($ctk,function ($q) use ($ctk){
            return $q->where('b.id_karyawan','like',"%".$ctk."%");
        })
        ->when($csb,function ($q) use ($csb){
            return $q->where('status_barang','like',"%".$csb."%");
        })
        ->when($ckb,function ($q) use ($ckb){
            return $q->where('b.id_kategori','like',"%".$ckb."%");
        })
        ->when($cmr,function ($q) use ($cmr){
            return $q->where('b.id_merk','like',"%".$cmr."%");
        })
        ->when($cpl,function ($q) use ($cpl){
            return $q->where('a.id_pelanggan','like',"%".$cpl."%");
        })
        ->paginate();
        // dd($ckel);
        return view('servis/status_servis',compact('data','teknisi','status','kategori','merk','pel'));
    }
    public function masuk(request $req,$id=""){
        $teknisi  = DB::table('sdm_karyawan')->where('id_sdm_status','5')->get();
        $kategori = DB::table('servis_kategori')->get();
        $merk   = DB::table('servis_merk')->get();
        $det  = DB::table('servis_pelanggan as a')
                    ->join('kelompok_pelanggan as b','a.id_kelompok','=','b.id_kelompok')
                    ->select(DB::raw('a.*,b.nama_kelompok'))
                    ->where('a.id_pelanggan',$req->id_pelanggan)
                    ->get();
                    // dd($req);
        return view('servis/servis_masuk',compact('det','teknisi','kategori','merk'));
    }
    public function rekanan(request $req,$id=""){
        $rekanan = DB::table('servis_rekanan')->get();
        $data    = DB::table('servis_transaksi as a')
                    ->join('servis_det_transaksi as b','a.id_transaksi','=','b.id_transaksi')
                    ->join('servis_merk as c','b.id_merk','=','c.id_merk')
                    ->join('servis_kategori as d','b.id_kategori','=','d.id_kategori')
                    ->join('sdm_karyawan as e','b.id_karyawan','=','e.id_karyawan')
                    ->join('servis_pelanggan as f','a.id_pelanggan','=','f.id_pelanggan')
                    ->join('servis_status as g','b.status_barang','=','g.id_status')
                    ->select(DB::raw('a.*, b.*,b.ket as ket2,c.*,d.*,e.*,f.*,g.*'))
                    ->where('a.id_transaksi',$req->id_transaski)
                    ->get();
                    // dd($data);
        return view('servis/kirim_rekanan',compact('data','rekanan'));
    }
    
}
