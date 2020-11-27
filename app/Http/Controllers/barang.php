<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class barang extends Controller
{
    public function index()
    {
        $kategori = DB::table('brg_kategori')->get();
        $merk   = DB::table('brg_merk')->get();
        $data  = DB::table('brg_nama as a')
                ->join('brg_stok as b','a.id_barang','=','b.id_barang')
                ->join('brg_satuan as c','a.id_sat','=','c.id_sat')
                ->orderBy('a.id_barang','DESC')
                ->select(DB::raw('a.*,b.*,c.*'))
                ->paginate(20);
        return view('barang/data_barang',compact('data','kategori','merk'));
    }
    public function indexgrid()
    {
        $kategori = DB::table('brg_kategori')->get();
        $merk   = DB::table('brg_merk')->get();
        $data  = DB::table('brg_nama as a')
                ->join('brg_stok as b','a.id_barang','=','b.id_barang')
                ->join('brg_satuan as c','a.id_sat','=','c.id_sat')
                ->orderBy('a.id_barang','DESC')
                ->select(DB::raw('a.*,b.*,c.*'))
                ->paginate(24);
        return view('barang/grid_barang',compact('data','kategori','merk'));
    }
    public function master()
    {
        // $toko = DB::table('tb_kondisipart as a')
        //         ->orderBy('a.id_kondisipart','DESC')
        //         ->select(DB::raw('a.*'))
        //         ->paginate(20);
        $satuan = DB::table('brg_satuan as a')
                ->orderBy('a.id_sat','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $merk = DB::table('brg_merk as a')
                ->orderBy('a.id_merk','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $leasing = DB::table('agee_rekanan_leasing as a')
                ->orderBy('a.id_leasing','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $kategori = DB::table('brg_kategori as a')
                ->orderBy('a.id_kat','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        return view('barang/master_barang',compact('kategori','leasing','merk','satuan'));
    }
    public function detail(request $req,$id=""){
        $det  = DB::table('brg_nama as a')
                    ->join('brg_stok as b','a.id_barang','=','b.id_barang')
                    ->join('brg_satuan as c','a.id_sat','=','c.id_sat')
                    ->join('brg_merk as d','a.id_merk','=','d.id_merk')
                    ->join('brg_kategori as e','a.id_kat','=','e.id_kat')
                    ->join('tb_jenisbrg as f','a.id_jenisbrg','=','f.id_jenisbrg')
                    ->select(DB::raw('a.*,b.*,c.*,d.*,e.*,f.*'))
                    ->where('a.id_barang',$req->id_barang)
                    ->get();
        // dd($det);
        return view('barang/detail_barang',compact('det'));
    }
}
