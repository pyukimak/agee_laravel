@extends('template/page')
@section('content')
<style>
    #red-status{
        color:red;
    }
    .putih:hover{
        /* color:white; */
        background-color: white;
    }
</style>
@php
    function date_sort($a,$b){
        return strtotime($a) - strtotime($b);
    }
@endphp
<div class="container-fluid pt-25">
    <div class="panel panel-default card-view">
        <div class="panel-heading mb-20">
            <div class="pull-left">
                <h6 class="panel-title txt-dark">Semua Status Servis</h6>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <form action="/servis/cari" method="POST">
            @csrf
                <div class="col-md-12">
                    <div class="col-md-2 mb-20">
                        <div style="padding-top: 14px;">
                            <button class="btn btn-primary btn-outline fancy-button btn-0">Tambah Fee Diambil</button>
                        </div>
                    </div>
                        <div class="col-md-2 mb-20">
                            <label class="control-label mb-10 text-left">Serial Number</label>
                            <input type="text" class="form-control" name="csn" value="">
                        </div>
                        <div class="col-md-2 mb-20">
                            <label class="control-label mb-10 text-left">No Surat Jalan / No Servis</label>
                            <input type="text" class="form-control" name="csj" value="">
                        </div>
                        <div class="col-md-2 mb-20">
                            <label class="control-label mb-10 text-left">Nama Teknisi</label>
                            <select class="teknisi" name="ctk">
                                <option value="" selected="true">--Tidak Ada--</option>
                                @foreach ($teknisi as $k)
                                    <option value="{{$k->id_karyawan}}">{{$k->nama_karyawan}}</option>
                                @endforeach
                            </select>
                            <script>
                                $(document).ready(function() {
                                    $('.teknisi').select2();
                                });
                            </script>
                        </div>
                        <div class="col-md-2 mb-20">
                            <label class="control-label mb-10 text-left">Status Barang</label>
                            <select class="status" name="csb">
                                <option value="" selected="true">--Tidak Ada--</option>
                                @foreach ($status as $k)
                                    <option value="{{$k->id_status}}">{{$k->nama_status}}</option>
                                @endforeach
                            </select>
                            <script>
                                $(document).ready(function() {
                                    $('.status').select2();
                                });
                            </script>
                        </div>
                        <div class="col-md-2 mb-20">
                            <div class="button-list" style="padding-top: 15px;">
                                <button type="submit" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-search"></i></button>
                                <a href="/servis"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
                                <button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-chevron-down"></i></button>
                            </div>
                        </div>
                </div>
                <div class="col-md-12">
                    <div class="collapse" id="serch" aria-expanded="true" style="">
                        <div class="well">
                            <div class="panel panel-default card-view">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Pencarian Lanjutan</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="form-wrap">
                                            <div class="row">
                                                <div class="col-md-6 mb-10">
                                                    <div class="col-md-6">
                                                        <label for="example-date-input" class="control-label mb-10 text-left">Tanggal Antara</label>
                                                        <input name="tgl_lahir" class="form-control" type="date" value="@if(isset($data->tgl_lahir)) {{$data->tgl_lahir}}@else {{old('tgl_lahir')}} @endif" id="example-date-input">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="example-date-input" class="control-label mb-10 text-left">Sampai</label>
                                                        <input name="tgl_lahir" class="form-control" type="date" value="@if(isset($data->tgl_lahir)) {{$data->tgl_lahir}}@else {{old('tgl_lahir')}} @endif" id="example-date-input">
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mb-10">
                                                    <label class="control-label mb-10 text-left">Kategori Barang</label>
                                                    <select class="kategori" name="ckb">
                                                        <option value="" selected="true">--Tidak Ada--</option>
                                                        @foreach ($kategori as $k)
                                                            <option value="{{$k->id_kategori}}">{{$k->nama_kategori}}</option>
                                                        @endforeach
                                                    </select>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('.kategori').select2();
                                                        });
                                                    </script>
                                                </div>
                                                <div class="col-md-2 mb-10">
                                                    <label class="control-label mb-10 text-left">Merk Barang</label>
                                                    <select class="merk" name="cmr">
                                                        <option value="" selected="true">--Tidak Ada--</option>
                                                        @foreach ($merk as $k)
                                                            <option value="{{$k->id_merk}}">{{$k->nama_merk}}</option>
                                                        @endforeach
                                                    </select>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('.merk').select2();
                                                        });
                                                    </script>
                                                </div>
                                                <div class="col-md-2 mb-10">
                                                    <label class="control-label mb-10 text-left">Nama Pelanggan</label>
                                                    <select class="pelanggan" name="ckb">
                                                        <option value="" selected="true">--Tidak Ada--</option>
                                                        @foreach ($pel as $k)
                                                            <option value="{{$k->id_pelanggan}}">{{$k->nama_pelanggan}}</option>
                                                        @endforeach
                                                    </select>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('.pelanggan').select2();
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                <thead>
                    <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:5%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">Surat Jalan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 10%; text-align: center;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 5%; text-align: center;">Total Biaya</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%; text-align: center;">Status Barang</th></tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $aSer)
                    <tr role="row" class="putih" data-toggle="collapse" data-target="#det_{{$aSer->id_transaksi}}">
                        <form role="form" method="POST" action="" enctype="multipart/form-data">
                            @csrf
                        {{-- <input type="hidden" name="id_pelanggan" value="{{$aSer->id_pelanggan}}"> --}}
                        <td style="text-align: center;">{{ $no }}</td>
                        <td style="text-align: center;"><h6>{{ $aSer->no_surat_jalan }}</h6><p>{{ $aSer->nama_karyawan }}</p></td>
                        <td style="text-align: center;"><h6>{{ $aSer->nama_kategori}} {{ $aSer->nama_merk}}</h6><p>{{ $aSer->nama_pelanggan}}</p></td>
                        <td style="text-align: center;">{{ $no }}</td>
                        <td style="text-align: center; padding: 0px;">
                            <div class="button-list">
                        <?php
                            $v_tanggal = array();
                            $v_user    = array();
                            $v_status  = array();
                            $v_keluhan = array();
                            $warna     = 'default';

                            $service_masuk = DB::table('servis_transaksi as a')
                                                ->join('servis_det_transaksi as b','a.id_transaksi','=','b.id_transaksi')
                                                ->join('servis_pelanggan as c','a.id_pelanggan','=','c.id_pelanggan')
                                                ->join('sdm_karyawan as d','b.id_karyawan','=','d.id_karyawan')
                                                ->join('servis_status as e','b.status_barang','=','e.id_status')
                                                ->where('a.id_transaksi',$aSer->id_transaksi)
                                                ->select(DB::raw('a.*,c.kd_pelanggan,c.nama_pelanggan,c.no_ktp,c.alamat,c.ket as ket_pelanggan,d.nama_karyawan,d.in_karyawan,e.nama_status'));

                            // var_dump($service_masuk->get());exit;
                            if($service_masuk->count() > 0){
                                foreach ($service_masuk->get() as $sm) {
                                    if($aSer->id_ket_masuk == 2){
                                        $data_det = DB::table('servis_det_transaksi as a')
                                                        ->join('servis_kategori as b','a.id_kategori','=','b.id_kategori')
                                                        ->join('servis_status as c','a.status_barang','=','c.id_status')
                                                        ->join('sdm_karyawan as d','a.id_karyawan','=','d.id_karyawan')
                                                        ->join('brg_merk as e','a.id_merk','=','e.id_merk')
                                                        ->join('servis_transaksi as f','a.id_transaksi','=','f.id_transaksi')
                                                        ->where('a.id_transaksi',$aSer->id_transaksi)
                                                        ->select(DB::raw('a.*,b.nama_kategori,b.icon as icon_kategori, c.nama_status,d.nama_karyawan,d.in_karyawan,e.nm_merk,e.icon as icon_merk'));
                                        
                                        if($data_det->count() > 0){
                                            foreach ($data_det->get() as $masuk) {
                                                $v_tanggal[] = $sm->tgl_transaksi;
                                                $v_user[]    = $sm->nama_karyawan;
                                                $v_status[]  = '<span id="red-status">- Masuk</span>';
                                                $v_keluhan[] = '-'.$masuk->keluhan;
                                            }
                                        }
                                    }else{
                                        $data_det = DB::table('servis_det_transaksi as a')
                                                        ->join('servis_kategori as b','a.id_kategori','=','b.id_kategori')
                                                        ->join('servis_status as c','a.status_barang','=','c.id_status')
                                                        ->join('sdm_karyawan as d','a.id_karyawan','=','d.id_karyawan')
                                                        ->join('brg_merk as e','a.id_merk','=','e.id_merk')
                                                        ->join('servis_transaksi as f','a.id_transaksi','=','f.id_transaksi')
                                                        ->where('a.id_transaksi',$aSer->id_transaksi)
                                                        ->select(DB::raw('a.*,b.nama_kategori,b.icon as icon_kategori, c.nama_status,d.nama_karyawan,d.in_karyawan,e.nm_merk,e.icon as icon_merk'));

                                        if($data_det->count() > 0){
                                            foreach ($data_det->get() as $masuk) {
                                                $v_tanggal[] = $sm->tgl_transaksi;
                                                $v_user[]    = $sm->nama_karyawan;
                                                $v_status[]  = '<span id="red-status">- Masuk</span>';
                                                $v_keluhan[] = '-'.$masuk->keluhan;
                                            }
                                        }
                                    }
                                }
                                $warna = 'primary';
                            }

                            echo '<button class="btn btn-'.$warna.' btn-circle btn-sm" ><i class="fa fa-chevron-right"></i></button>';
                        ?>
                        
                        {{-- proses --}}
                        @php
                            $color_proses     = 'default';
                            $icons            = 'fa-refresh';
                            $proses_service   = DB::table('con_analisa as a')
                                                ->join('sdm_karyawan as b','a.id_sdm','=','b.id_karyawan')
                                                ->join('servis_status as c','a.id_status_barang','=','c.id_status')
                                                ->where('a.id_transaksi',$aSer->id_transaksi)
                                                ->orderBy('a.tanggal','desc')
                                                ->select(DB::raw('a.*,b.nama_karyawan,c.nama_status'));

                            $part_service     = DB::table('con_order_part as a')
                                                ->join('users as b','a.id_sdm','=','b.id')
                                                ->join('sdm_karyawan as c','a.id_sdm','=','c.id_karyawan')
                                                ->where('a.id_transaksi',$aSer->id_transaksi)
                                                ->orderBy('a.tanggal','asc')
                                                ->select(DB::raw('a.*,b.username,c.nama_karyawan'));

                            $tersedia_service = DB::table('con_status_barang as a')
                                                ->join('sdm_karyawan as b','a.id_sdm','=','b.id_karyawan')
                                                ->where('a.id_transaksi',$aSer->id_transaksi)
                                                ->where(function($q){
                                                    $q->where('a.id_status_barang','=','9')
                                                      ->orWhere('a.id_status_barang','=','11');
                                                })
                                                ->orderBy('a.id_order_part','desc')
                                                ->select('a.*,b.nama_karyawan');

                            $kirim_service    = DB::table('servis_det_transaksi as a')
                                                ->join('sdm_karyawan as b','a.id_karyawan','=','b.id_karyawan')
                                                ->join('servis_det_kirim as c','a.id_det_transaksi','=','c.id_det_transaksi')
                                                ->join('servis_kirim as d','c.id_kirim','=','d.id_kirim')
                                                ->join('servis_rekanan as e','d.id_rekanan','=','e.id_rekanan')
                                                ->where('a.id_transaksi',$aSer->id_transaksi)
                                                ->select(DB::raw('a.*,b.nama_karyawan,d.tgl as tgl_kirim,d.no_bukti,e.nama_rekanan,e.alamat,e.ket'));

                            $kembali_service  = DB::table('servis_balik as a')
                                                ->join('servis_det_balik as b','a.id_balik','=','b.id_balik')
                                                ->join('servis_rekanan as c','a.id_rekanan','=','c.id_rekanan')
                                                ->where('b.id_det_transaksi', $aSer->id_det_transaksi)
                                                ->select(DB::raw('a.tgl,a.no_nota_balik,a.no_bukti,c.nama_rekanan,c.kd_rekanan'));
                            
                            if($kembali_service->count() > 0 && $kirim_service->count() > 0 && $proses_service->count() > 0){
                                $color_proses  = 'primary';
                                $icons         = ' fa-th';
                            }elseif($kirim_service->count() > 0 && $proses_service->count() > 0){
                                $color_proses  = 'primary';
                                $icons         = ' fa-th-large';
                            }elseif($tersedia_service->count() > 0 && $part_service->count() > 0 && $proses_service->count() > 0){
                                $color_proses  = 'primary';
                                $icons         = 'fa-arrow-down';
                            }elseif ($part_service->count() > 0 && $proses_service->count() > 0) {
                                $color_proses  = 'primary';
                                $icons         = 'fa-gears';
                            // var_dump($part_service->get());exit;
                            }elseif($proses_service->count() > 0){
                                $color_proses = 'primary';
                                $icons        = 'fa-refresh';
                            }
                            echo '<button class="btn btn-'.$color_proses.' btn-circle btn-sm"><i class="fa '.$icons.'"></i></button>';
                        @endphp
                        {{-- LIST HISTORI --}}
                        @php
                           if($kembali_service->count() > 0){
                                foreach ($kembali_service->get() as $kembali) {
                                    $v_tanggal[] = $kembali->tgl;
                                    $v_user[]    = '-';
                                    $v_status[]  = '<span id="red-status">- kembali</span>';
                                    $v_keluhan[] = ' - '.$kembali->no_bukti.' - '.$kembali->nama_rekanan;
                                }
                            }
                            if($kirim_service->count() > 0){
                                foreach ($kirim_service->get() as $kirim) {
                                    $v_tanggal[] = $kirim->tgl_kirim;
                                    $v_user[]    = $kirim->nama_karyawan;
                                    $v_status[]  = '<span id="red-status">- kirim</span>';
                                    $v_keluhan[] = ' - '.$kirim->no_bukti.' - '.$kirim->nama_rekanan;
                                }
                            }
                            if($tersedia_service->count() > 0){
                                foreach ($tersedia_service->get() as $sedia) {
                                    $v_tanggal[] = $sedia->tanggal;
                                    $v_user[]    = $sedia->nama_karyawan;
                                    $v_status[]  = '<span id="red-status">- Part Sedia</span>';
                                    $v_keluhan[] = ' - '.$sedia->ket_order;
                                }
                            }
                            if ($part_service->count() > 0) {
                                foreach ($part_service->get() as $part) {
                                    $v_tanggal[] = $part->tanggal;
                                    $v_user[]    = $part->username;
                                    $v_status[]  = '<span id="red-status">- Order Part</span>';
                                    $v_keluhan[] = ' - '.$part->ket_order;
                                }
                            // var_dump($part_service->get());exit;
                            }
                            if($proses_service->count() > 0){
                                foreach ($proses_service->get() as $ps) {
                                    $v_tanggal[] = $ps->tanggal;
                                    $v_user[]    = $ps->nama_karyawan;
                                    $v_status[]  = '<span id="red-status">- Analisa</span>';
                                    $v_keluhan[] = ' - '.$ps->ket_analisa;
                                }
                            }
                        @endphp
                        {{-- LIST HISTORI END --}}
                        {{-- proses END --}}

                        {{-- JADI/BATAL ICON --}}
                        @php
                            $versi_jadi = DB::table('servis_det_transaksi')
                                            ->where('id_transaksi',$aSer->id_transaksi)
                                            ->select(DB::raw('*'));
                            
                            if($versi_jadi->count() > 0){
                                $row_jadi = $versi_jadi->first();
                                $st_jadi  = $row_jadi->status_barang;
                            }

                            if($st_jadi == 2){
                                echo '<i class="btn btn-primary btn-circle btn-sm" aria-label="Left Align" data-toggle="tooltip" data-placement="top" data-html="true" title="Jadi"><span class="fa fa-check"></span></i>';
                            }elseif($st_jadi == 10){
                                echo '<i class="btn btn-danger btn-circle btn-sm" aria-label="Left Align" data-toggle="tooltip" data-placement="top" data-html="true" title="Batal"><span class="fa fa-times"></span></i>';
                            }else{
                                echo '<i class="btn btn-default btn-circle btn-sm" aria-label="Left Align" data-toggle="tooltip" data-placement="top" data-html="true" title="Belum Jadi"><span class="fa fa-check"></span></i>'; 
                            }
                            @endphp
                        {{-- JADI/BATAL ICON END --}}

                        {{-- DIAMBIL --}}
                        @php
                            $color_ambil = 'default';
                            $diambil     = DB::table('servis_transaksi as a')
                                            ->join('servis_det_transaksi as b','a.id_transaksi','=','b.id_transaksi')
                                            ->where('a.id_transaksi',$aSer->id_transaksi)
                                            ->where('b.status_barang',3)
                                            ->select(DB::raw('a.*,b.tgl_ambil'));

                            if($diambil->count() > 0){
                                $color_ambil = 'primary';
                            }

                            echo '<i  class="btn btn-'.$color_ambil.' btn-circle btn-sm" aria-label="Left Align" data-toggle="tooltip" data-placement="top" title="Ambil"><span class="fa fa-shopping-bag"></span></i>';
                            echo '<i  class="btn btn-'.$color_ambil.' btn-circle btn-sm" aria-label="Left Align" data-toggle="tooltip" data-placement="top" title="Selesai"><span class="fa fa-sign-out"></span></i>';
                        @endphp
                        {{-- DIAMBIL END --}}

                                {{-- 
                                <button class="btn btn-primary btn-circle btn-sm"><i class="fa fa-question"></i></button>
                                <button class="btn btn-success btn-circle btn-sm"><i class="fa fa-check"></i></button>
                                <button class="btn btn-default btn-circle btn-sm"><i class="fa fa-sign-out"></i></button> --}}
                            </div>
                        </td>
                        <?php $no++; ?>
                        </form>
                    </tr>
                    <td colspan="5" style="border: 0;" class="putih">
                        <div id="det_{{$aSer->id_transaksi}}" class="collapse" aria-expanded="true" style="">
                            <div class="well">
                                <div class="panel panel-default card-view">
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body">
                                            <div class="form-wrap">
                                                <div class="row mb-20">
                                                    <div class="col-md-12" style="text-align: center;">
                                                        <p>Status Saat Ini :</p>
                                                    <h3 class="text-primary">{{$aSer->nama_status}}</h3>
                                                        <p>Waktu Masuk :</p>
                                                    </div>
                                                </div>
                                                <div class="row mr-10 ml-10">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="panel panel-primary card-view">
                                                            <div class="panel-heading">
                                                                <div class="pull-left">
                                                                    <h6 class="panel-title txt-light">Update Menu</h6>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body">
                                                                    <ul>
                                                                        <li class="mb-10">
                                                                            <div class="fileupload btn btn-primary btn-block btn-rounded btn-anim" onclick="alurServis(1,{{$aSer->id_transaksi}})"><i class="fa fa-upload"></i><span class="btn-text">Jadi Fix</span></div>
                                                                        </li>
                                                                        <li class="mb-10">
                                                                            <div class="fileupload btn btn-primary btn-block btn-rounded btn-anim" onclick="alurServis(2,{{$aSer->id_transaksi}})"><i class="fa fa-upload"></i><span class="btn-text">Batal</span></div>
                                                                        </li>
                                                                        <li class="mb-10">
                                                                            <div class="fileupload btn btn-primary btn-block btn-rounded btn-anim" onclick="alurServis(3,{{$aSer->id_transaksi}})"><i class="fa fa-upload"></i><span class="btn-text">Order Part</span></div>
                                                                        </li>
                                                                        <li class="mb-10">
                                                                            {{-- <form role="form" method="POST" action="{{ url('servis/kirim_rekanan/'.$aSer->id_transaksi)}}" enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden" name="id_transaksi" value="{{$aSer->id_transaksi}}">
                                                                                <button type="submit" class=" btn btn-primary btn-block btn-rounded btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Minta Dikirim Rekanan</span></button>
                                                                            </form> --}}
                                                                            <div class="fileupload btn btn-primary btn-block btn-rounded btn-anim" onclick="alurServis(4,{{$aSer->id_transaksi}})"><i class="fa fa-upload"></i><span class="btn-text">Minta Kirim Rekanan</span></div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="panel panel-warning card-view">
                                                            <div class="panel-heading">
                                                                <div class="pull-left">
                                                                    <h6 class="panel-title txt-light">Detail Barang</h6>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-4"><p><strong>Nama Barang</p></strong></div>
                                                                            <div class="col-md-1"><p style="text-align: center">:</p></div>
                                                                            <div class="col-md-7">{{ $aSer->nama_kategori}} {{ $aSer->nama_merk}}</div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-4"><p><strong>Serial (SN)</p></strong></div>
                                                                            <div class="col-md-1"><p style="text-align: center">:</p></div>
                                                                            <div class="col-md-7">{{ $aSer->serial}}</div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-4"><p><strong>Keterangan</p></strong></div>
                                                                            <div class="col-md-1"><p style="text-align: center">:</p></div>
                                                                            <div class="col-md-7">{{ $aSer->ket2}}</div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-4"><p><strong>Kelengkapan</p></strong></div>
                                                                            <div class="col-md-1"><p style="text-align: center">:</p></div>
                                                                            <div class="col-md-7">{{ $aSer->kelengkapan}}</div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-4"><p><strong>Keluhan</p></strong></div>
                                                                            <div class="col-md-1"><p style="text-align: center">:</p></div>
                                                                            <div class="col-md-7">{{ $aSer->keluhan}}</div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-4"><p><strong>Teknisi</p></strong></div>
                                                                            <div class="col-md-1"><p style="text-align: center">:</p></div>
                                                                            <div class="col-md-7">{{ $aSer->nama_karyawan}}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="panel panel-info card-view">
                                                            <div class="panel-heading">
                                                                <div class="pull-left">
                                                                    <h6 class="panel-title txt-light">Detail Pemilik</h6>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="panel-wrapper collapse in">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-4"><p><strong>Nama</p></strong></div>
                                                                            <div class="col-md-1"><p style="text-align: center">:</p></div>
                                                                            <div class="col-md-7">[{{ $aSer->id_pelanggan}}] {{ $aSer->nama_pelanggan}}</div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-4"><p><strong>Tanggal Lahir</p></strong></div>
                                                                            <div class="col-md-1"><p style="text-align: center">:</p></div>
                                                                            <div class="col-md-7">{{ $aSer->tgl_lahir}}</div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-4"><p><strong>Alamat</p></strong></div>
                                                                            <div class="col-md-1"><p style="text-align: center">:</p></div>
                                                                            <div class="col-md-7">{{ $aSer->alamat}}</div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-4"><p><strong>Telepon / WA</p></strong></div>
                                                                            <div class="col-md-1"><p style="text-align: center">:</p></div>
                                                                            <div class="col-md-7">{{ $aSer->no_sms}}/{{$aSer->ket}}</div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="button-list mt-10">
                                                                                <button class="btn btn-danger btn-xs btn-rounded" style="margin-right: 0;">Ganti Teknisi</button>
                                                                                <button class="btn btn-danger btn-xs btn-rounded" style="margin-right: 0;">Ganti pelanggan</button>
                                                                                <button class="btn btn-danger btn-xs btn-rounded" style="margin-right: 0;">Konfirmasi</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="panel panel-default panel-body card-view  mt-10 mr-10 ml-10">
                                                        <div class="col-md 12">
                                                            <table width="100%">
                                                                <tr>
                                                                    <td>Tanggal</td>
                                                                    <td>Keterangan</td>
                                                                </tr>
                                                                @php
                                                                    usort($v_tanggal,"date_sort");

                                                                    for($i=0; $i < count($v_tanggal);$i++){
                                                                        if($v_tanggal[$i] <> null){
                                                                            echo '<tr>
                                                                                    <td>'.$v_tanggal[$i].'</td>         
                                                                                    <td>'.$v_user[$i].'</td>         
                                                                                    <td>'.$v_status[$i].' '.$v_keluhan[$i].'</td>         
                                                                                </tr>';
                                                                        }
                                                                    }
                                                                @endphp
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    @endforeach
                </tbody>
            </table>
            <div class="dataTables_paginate paging_simple_numbers pull-right mr-10" id="datable_1_paginate">
                {!! $data->appends(['sort' => 'votes'])->links() !!}
            </div>
        </div>
    </div>
</div>
{{-- modal alur servis --}}
<div class="modal fade" id="alur_servis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="modal_judul_servis"></h5>
      </div>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="modal-body">
			<div class="form-group">
				<label id="label_alasan" for="exampleInputEmail1"></label>
				<textarea id="textarea-stat" placeholder="" class="form-control" rows="5" name="ket_analisa" required></textarea>
			</div>
			<div id="div_order" style="display:none;">
				<div class="form-group">
					<label for="link">Link</label>
					<input type="text" name="link" id="link" class="form-control">
				</div>
				<div class="form-group">
					<label for="harga">Harga</label>
					<input type="text" name="harga" id="harga" class="form-control">
				</div>
			</div>
			<div class="form-group">
                <label for="cari">Tanggal Hari Ini</label>
                <table id="test">
                    <tr>
                        <td>
                            {{-- <
                            
                                $options= array();
                                
                                $tanggal_ambil = isset($tanggal_ambil)?$tanggal_ambil: date('d') ;
                                for ($x = 1; $x < 32; $x++) {
                                    $options[$x] = $x;
                                } 
                                echo form_dropdown('tanggal_ambil', $options, $tanggal_ambil,'class="form-control" readonly');
                            ?> --}}
                            <select name="tgl_ambil" id="" class="form-control" readonly>
                                <option value="{{date('d')}}">{{date('d')}}</option>
                            </select>
                        </td>
                        <td>
                            {{-- <
                                $options= array();
                                
                                $bulan_ambil = isset($bulan_ambil)?$bulan_ambil: date('m') ;
                                for ($x = 1; $x < 13; $x++) {
                                    $bln = '';
                                    if($x == 1){
                                        $bln = 'Jan';
                                    }else if($x == 2){
                                        $bln = 'Feb';
                                    }else if($x == 3){
                                        $bln = 'Mar';
                                    }else if($x == 4){
                                        $bln = 'Apr';
                                    }else if($x == 5){
                                        $bln = 'Mei';
                                    }else if($x == 6){
                                        $bln = 'Jun';
                                    }else if($x == 7){
                                        $bln = 'Jul';
                                    }else if($x == 8){
                                        $bln = 'Agu';
                                    }else if($x == 9){
                                        $bln = 'Sep';
                                    }else if($x == 10){
                                        $bln = 'Okt';
                                    }else if($x == 11){
                                        $bln = 'Nop';
                                    }else if($x == 12){
                                        $bln = 'Des';
                                    }
                                    $options[$x] = $bln;
                                } 
                                echo form_dropdown('bulan_ambil', $options, $bulan_ambil,'class="form-control" readonly'); 
                            ?> --}}
                            <select name="bln_ambil" id="" class="form-control" readonly>
                                <option value="{{date('m')}}">{{date('m')}}</option>
                            </select>
                        </td>
                        <td>
                            {{-- <
                                $options= array();
                                
                                $tahun_ambil = isset($tahun_ambil)?$tahun_ambil: date('Y') ;
                                for ($x = 2013; $x < date('Y')+1; $x++) {
                                    $options[$x] = $x;
                                } 
                                echo form_dropdown('tahun_ambil', $options, $tahun_ambil,'class="form-control" readonly'); 
                            ?> --}}
                            <select name="thn_ambil" id="" class="form-control" readonly>
                                <option value="{{date('Y')}}">{{date('Y')}}</option>
                            </select>
                        </td>
                        
                    </tr>
                </table>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan !</button>
			<input type="hidden" name="st">
			<input type="hidden" name="id_det_transaksi">
			<input type="hidden" name="id_transaksi">
			<input type="hidden" name="pilihan">
			<input type="hidden" name="status_alur">
			<input type="hidden" name="id_status">
			<input type="hidden" name="id_wallet">
			<input type="hidden" name="no_surat_jalan">
			<input type="hidden" name="nominal_fee">
			<input type="hidden" name="id_karyawan">
			<input type="hidden" name="requirement_jadi">
			<input type="hidden" name="requirement_diambil">
			
			<!-- <a class="btn btn-default btn-sm" href="< echo site_url(); ?>control_servis/klik_surat_jalan/< echo isset($surat_jalan)?$surat_jalan:''; ?>" title="Klik untuk membatalkan data">Kembali</a> -->
        </form>
			{{-- <a href="< site_url('kirim/klik_cari_serial/'.$serial.'/4');?>" class="btn btn-sm btn-default animated-button" id="kiriman" style="display:none;transition: visibility 0s, opacity 0.5s linear;"><span></span><span></span><span></span><span></span>Ke Halaman Kirim</a> --}}
        </div> 
    </div>
  </div>
</div>
{{-- modal alur servis END --}}
<script>
    function alurServis(id,id_transaksi){
        if(id == 1){
            $('#alur_servis').modal()
            $('#modal_judul_servis').html('Jadi Fix')
            $('#label_alasan').html('Mengapa Minta Kirim ke Rekanan ?')
        }
        if(id == 2){
            $.ajax({
                url     : "",
                type    : "POST",
                data    : {id : id},
                dataType: "JSON",
                success:function(data){
                    console.log(data);
                    $('#alur_servis').modal()
                    
                    $('#div_order').hide();
                    $('#modal_judul_servis').html('Order Part')
                    $('#label_alasan').html('Mengapa Pelanggan Meminta Untuk Batal?')
                    $('#textarea-stat').attr('name','ket_analisa');
                    $('[name="st"]').val(data.st);
                    $('[name="id_det_transaksi"]').val(data.id_det_transaksi);
                    $('[name="id_transaksi"]').val(data.id_transaksi);
                    $('[name="pilihan"]').val('7');
                    $('[name="status_alur"]').val('20');
                    $('[name="id_status"]').val(data.id_status);
                    $('[name="id_wallet"]').val(data.wallet);
                    $('[name="no_surat_jalan"]').val(data.surat_jalan);
                    $('[name="nominal_fee"]').val(data.nominal_fee);
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="requirement_jadi"]').val(data.requirement_jadi);
                    $('[name="requirement_diambil"]').val(data.requirement_diambil);
                    $('[class="up_g form-group"]').hide();
                },error:function(err){
                    console.log(err);
                }
            });
        }
        if(id == 3){
            $('#alur_servis').modal()
            $('#modal_judul_servis').html('Order Part')
            $('#label_alasan').html('Mengapa Minta Kirim ke Rekanan ?')
            
        }
        if(id == 4){      
            $.ajax({
			 url     : "",
			 type    : "POST",
			 data    : {id : id},
			 dataType: "JSON",
			 success:function(data){
				 console.log(data);
				 $('#alur_servis').modal()
				 
				 $('#div_order').hide();
				 $('#modal_judul_servis').html('Minta Kirim Rekanan')
                 $('#label_alasan').html('Mengapa Minta Kirim ke Rekanan ?')
				 $('#textarea-stat').attr('name','ket_analisa');
				 $('[name="st"]').val(data.st);
				 $('[name="id_det_transaksi"]').val(data.id_det_transaksi);
				 $('[name="id_transaksi"]').val(data.id_transaksi);
				 $('[name="pilihan"]').val('7');
				 $('[name="status_alur"]').val('20');
				 $('[name="id_status"]').val(data.id_status);
				 $('[name="id_wallet"]').val(data.wallet);
				 $('[name="no_surat_jalan"]').val(data.surat_jalan);
				 $('[name="nominal_fee"]').val(data.nominal_fee);
				 $('[name="id_karyawan"]').val(data.id_karyawan);
				 $('[name="requirement_jadi"]').val(data.requirement_jadi);
				 $('[name="requirement_diambil"]').val(data.requirement_diambil);
				 $('[class="up_g form-group"]').hide();
			 },error:function(err){
				 console.log(err);
			 }
		 });
        }
    }
</script>
@endsection