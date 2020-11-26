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
    public function detail(request $req,$id=""){
        $det  = DB::table('brg_nama as a')
                    ->join('brg_stok as b','a.id_barang','=','b.id_barang')
                    ->join('brg_satuan as c','a.id_sat','=','c.id_sat')
                    ->select(DB::raw('a.*,b.*,c.*'))
                    ->where('a.id_barang',$req->id_barang)
                    ->get();
        // dd($det);
        return view('barang/detail_barang',compact('det'));
    }
}
