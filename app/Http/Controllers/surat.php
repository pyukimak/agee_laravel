<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class surat extends Controller
{
    public function master()
    {
        $jenis = DB::table('surat_jenis as a')
                ->orderBy('a.id_jenis','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        $surat = DB::table('surat_all as a')
                ->orderBy('a.id_surat_all','DESC')
                ->select(DB::raw('a.*'))
                ->paginate(20);
        return view('surat/master_surat',compact('jenis','surat'));
    }
}
