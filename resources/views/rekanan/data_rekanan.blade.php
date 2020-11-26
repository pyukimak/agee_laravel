@extends('template/page')
@section('content')
	<div class="container-fluid pt-25">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Data Rekanan</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="button-list pull-right mb-10" style="">
                        <a href="{{ url('/sdm/tambah') }}"><button class="btn btn-success btn-circle btn-sm"><i class="fa fa-plus"></i></button></a>
                        <a href="/rekanan"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
                        <button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-search"></i></button>
                    </div>
                    <div class="col-md-12">
                        <div class="collapse" id="serch" aria-expanded="true" style="">
                            <div class="well">
                                <div class="panel panel-default card-view">
                                    <div class="panel-heading">
                                        <div class="pull-left">
                                            <h6 class="panel-title txt-dark">Pencarian</h6>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body">
                                            <div class="form-wrap">
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10 text-left">Kode Rekanan</label>
                                                        <input type="text" class="form-control" name="cnm" value="{{ old('cnm') }}" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10 text-left">Nama Rekanan</label>
                                                        <input type="text" class="form-control" name="cnm" value="{{ old('cnm') }}" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10">Kelompok Rekanan</label>
                                                        <select class="kelompok" name="cst">
                                                            <option value="" selected="true">--Tidak Ada--</option>
                                                            @foreach ($kelompok as $j)
                                                                <option value="{{$j->id_kelompok_rekanan}}">{{$j->nama_kelompok_rekanan}}</option>
                                                            @endforeach
                                                        </select>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('.kelompok').select2();
                                                            });
                                                        </script>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10">Kategori</label>
                                                        <select class="kategori" name="cst">
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
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10">Merk</label>
                                                        <select class="merk" name="cst">
                                                            <option value="" selected="true">--Tidak Ada--</option>
                                                            @foreach ($merk as $l)
                                                                <option value="{{$l->id_merk}}">{{$l->nama_merk}}</option>
                                                            @endforeach
                                                        </select>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $('.merk').select2();
                                                            });
                                                        </script>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mt-30"> 
                                                            <button type="submit" class="btn btn-success btn-anim btn-block"><i class="icon-rocket"></i><span class="btn-text">Cari</span></button>
                                                        </div>
                                                    </div>
                                                </div>
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
                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:2%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">Foto</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 3%; text-align: center;">Kode</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%; text-align: center;">Alamat</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 5%; text-align: center;">Telp</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%; text-align: center;">Aksi</th></tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $a)
                        <tr role="row" class="odd">
                            <td style="text-align: center;">{{ $no }}</td>
                            <td style="text-align: center;"><img style="width:90px; height:100px object-fit:cover;" src="{{$a->foto == '' ? asset('uploads/noimg.png') : asset('uploads/small_'.$a->foto)}}" alt=""></td>
                            <td style="text-align: center;"><a><h6 class="text-danger">{{ $a->kd_rekanan}}</h6> </a></td>
                            <td style=""><h6 class="text-primary">{{ $a->nama_rekanan}}</h6></td>
                            <td style="text-align: center;"><a tabindex="0" class="ilang dowu" role="button" data-toggle="popover" data-placement="top" data-content="{{ $a->alamat }}">{{ $a->alamat }}</a></td>
                            <td style="text-align: center;">{{ $a->no_telp}}</td>
                            <td style="text-align: center; padding: 0px;">
                                <div class="button-list">
                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_rekanan)}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="btn-group">
                                            <input type="hidden" name="id_rekanan" value="{{$a->id_rekanan}}">
                                            <button type="submit" aria-expanded="false" class="btn btn-primary btn-xs" type="button"><i class="fa fa-info-circle"></i></button>
                                            <button aria-expanded="false" data-toggle="dropdown"  class="btn btn-success btn-xs" type="button"> <i class="fa fa-shopping-cart"></i></button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Beli Cash</a></li>
                                                <li><a href="#">Beli Kredit</a></li>
                                            </ul>
                                            <a href="{{ url('a/edit/'.$a->id_rekanan) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-print"></i></button></a>
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