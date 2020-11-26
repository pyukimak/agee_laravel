<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rekanan extends Controller
{
    public function index()
    {
        $kategori = DB::table('servis_kategori')->get();
        $merk   = DB::table('servis_merk')->get();
        $kelompok   = DB::table('kelompok_rekanan')->get();
        $data  = DB::table('servis_rekanan as a')
                ->join('kelompok_rekanan as b','a.id_kelompok_rekanan','=','b.id_kelompok_rekanan')
                ->orderBy('a.id_rekanan','DESC')
                ->select(DB::raw('a.*,b.*'))
                ->paginate(20);
        return view('rekanan/data_rekanan',compact('data','kategori','merk','kelompok'));
    }
    public function kelompok()
    {
        $data  = DB::table('kelompok_rekanan as a')
                ->orderBy('a.id_kelompok_rekanan','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        return view('rekanan/data_kelompok',compact('data'));
    }
}
