<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dokumen extends Controller
{
    public function master()
    {
        $jenis = DB::table('doc_jenis_pengadaan as a')
                ->orderBy('a.id_doc_jenis_pengadaan','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $bank = DB::table('doc_bank as a')
                ->orderBy('a.id_bank','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $pajak = DB::table('doc_jenis_pajak as a')
                ->orderBy('a.id_pajak','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $laporan = DB::table('doc_jenis_laporan as a')
                ->orderBy('a.id_laporan_pajak','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $akun = DB::table('tb_miror as a')
                ->orderBy('a.id_miror','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        return view('dokumen/master_dokumen',compact('jenis','bank','pajak','laporan','akun'));
    }
}
