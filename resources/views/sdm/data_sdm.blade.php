@extends('template/page')
@section('content')
	<div class="container-fluid pt-25">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Data SDM AGEECOM</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="button-list pull-right mb-10" style="">
                        <button type="submit" class="btn btn-primary btn-circle btn-sm" ><i class="fa fa-bars"></i></button>
                        <a href="{{ url('/sdm/tambah') }}"><button class="btn btn-success btn-circle btn-sm"><i class="fa fa-plus"></i></button></a>
                        <a href="/sdm"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
                        <button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-search"></i></button>
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
                                                <form action="/sdm/cari" method="POST">
                                                 @csrf
                                                    <div class="row">
                                                        <div class="form-group col-md-3">
                                                            <label class="control-label mb-10 text-left">Nama SDM</label>
                                                            <input type="text" class="form-control" name="cnm" value="{{ old('cnm') }}" placeholder="">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="control-label mb-10">Status SDM</label>
                                                            <select class="status" name="cst">
                                                                <option value="" selected="true">--Tidak Ada--</option>
                                                                @foreach ($status as $a)
                                                                <option value="{{$a->id_sdm_status}}">{{$a->nama_sdm_status}}</option>
                                                                @endforeach
                                                            </select>
                                                            <script>
                                                                $(document).ready(function() {
                                                                    $('.status').select2();
                                                                });
                                                            </script>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="control-label mb-10">Asal Sekolah</label>
                                                            <select class="sekolah" name="cas">
                                                                <option value="" selected="true">--Tidak Ada--</option>
                                                                @foreach ($sekolah as $b)
                                                                <option value="{{$b->id_sekolah}}">{{$b->nama_sekolah}}</option>
                                                                @endforeach
                                                            </select>
                                                            <script>
                                                                $(document).ready(function() {
                                                                    $('.sekolah').select2();
                                                                });
                                                            </script>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="control-label mb-10">Jurusan</label>
                                                            <select class="jurusan" name="cjr">
                                                                <option value="" selected="true">--Tidak Ada--</option>
                                                                @foreach ($jurusan as $c)
                                                                <option value="{{$c->id_sdm_jurusan}}">{{$c->nama_sdm_jurusan}}</option>
                                                                @endforeach
                                                            </select>
                                                            <script>
                                                                $(document).ready(function() {
                                                                    $('.jurusan').select2();
                                                                });
                                                            </script>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="control-label mb-10">Status Aktif</label>
                                                            <select class="aktif" name="csa">
                                                                <option value="" selected="true">--Tidak Ada--</option>
                                                                {{-- @foreach ($aktif as $k)
                                                                <option value="{{$k->id_aktif}}">{{$k->nama_aktif}}</option>
                                                                @endforeach --}}
                                                            </select>
                                                            <script>
                                                                $(document).ready(function() {
                                                                    $('.aktif').select2();
                                                                });
                                                            </script>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label class="control-label mb-10">Usia Maximun</label>
                                                            <select class="usia" name="cus">
                                                                <option value="" selected="true">--Tidak Ada--</option>
                                                                <option value="">Termuda</option>
                                                                <option value="">Tertua</option>
                                                            </select>
                                                            <script>
                                                                $(document).ready(function() {
                                                                    $('.usia').select2();
                                                                });
                                                            </script>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="example-date-input" class="control-label mb-10 text-left">Tanggal</label>
                                                            <input name="tgl" class="form-control" type="date" value="" id="example-date-input">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group mt-30"> 
                                                                <button type="submit" class="btn btn-success btn-anim btn-block"><i class="icon-rocket"></i><span class="btn-text">Cari</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                    <thead>
                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:2%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">Foto</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 3%; text-align: center;">Kode</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%; text-align: center;">Nama</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%; text-align: center;">Masa Kerja</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 5%; text-align: center;">Telp</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%; text-align: center;">Aksi</th></tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $sdm)
                        <tr role="row" class="odd">
                            <td style="text-align: center;">{{ $no }}</td>
                            <td style="text-align: center;"><img style="width:90px; height:100px object-fit:cover;" src="{{$sdm->foto_diri == '' ? asset('uploads/noimg.png') : asset('uploads/small_'.$sdm->foto_diri)}}" alt=""></td>
                            <td style="text-align: center;"><a><h6 class="text-danger">{{ $sdm->kd_karyawan}}</h6> </a><p>{{ $sdm->nama_sdm_status}}</p></td>
                            <?php 
                                $d1 = strtotime($sdm->mulai_kerja);
                                $d2 = strtotime($sdm->selesai_kerja);
                                $min_date = min($d1, $d2);
                                $max_date = max($d1, $d2);
                                $i = 0;

                                while (($min_date = strtotime("+1 MONTH", $min_date)) <= $max_date) {
                                    $i++;
                                }
                                 // 8
                            ?>
                            <td style=""><h6 class="text-primary">{{ $sdm->nama_karyawan}}<span class="label label-primary pull-right">{{ $sdm->umur}} thn</span></h6><p>{{ $sdm->nama_sekolah}}</p></td>
                            <td style="text-align: center;"><h6>{{ $sdm->mulai_kerja}} - {{ $sdm->selesai_kerja}}<span class="label label-primary ml-10"></span></h6><p>({{ $i}} bulan / {{$sdm->lama_hari}} hari)</p></td>
                            <td style="text-align: center;">{{ $sdm->telp}}</td>
                            <td style="text-align: center; padding: 0px;">
                                <div class="button-list">
                                    <form role="form" method="POST" action="{{ url('sdm/detail/'.$sdm->id_karyawan)}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="btn-group">
                                            <input type="hidden" name="id_karyawan" value="{{$sdm->id_karyawan}}">
                                            <button type="submit" aria-expanded="false" class="btn btn-primary btn-square" type="button"><i class="zmdi zmdi-account"></i></button>
                                            <button aria-expanded="false" class="btn btn-success btn-square" type="button"><i class="zmdi zmdi-whatsapp"></i></button>
                                            <a href="{{ url('sdm/edit/'.$sdm->id_karyawan) }}"><button aria-expanded="false" class="btn btn-warning btn-square" type="button"><i class="zmdi zmdi-edit"></i></button></a>
                                            <a href="{{ url('sdm/edit/'.$sdm->id_karyawan) }}"><button aria-expanded="false" class="btn btn-danger btn-square" type="button"><i class="zmdi zmdi-delete"></i></button></a>
                                        </div>
                                    </form>
                                </div>
                            </td>
                            <?php $no++; ?>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers pull-right mr-10" id="datable_1_paginate">
                    {!! $data->appends(['sort' => 'votes'])->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection