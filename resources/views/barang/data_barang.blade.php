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
                        <a href="{{ url('/sdm/tambah') }}"><button class="btn btn-success btn-circle btn-sm"><i class="fa fa-barcode"></i></button></a>
                        <a href="/rekanan"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
                        <button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-search"></i></button>
                        <a href="{{ url('/barang/grid') }}"><button class="btn btn-primary btn-circle btn-sm"><i class="fa fa-th-large"></i></button></a>
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
                                                        <label class="control-label mb-10">Kategori</label>
                                                        <select class="kategori" name="cst">
                                                            <option value="" selected="true">--Tidak Ada--</option>
                                                            @foreach ($kategori as $k)
                                                                <option value="{{$k->id_kat}}">{{$k->nm_kat}}</option>
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
                                                                <option value="{{$l->id_merk}}">{{$l->nm_merk}}</option>
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
                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:5%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">Foto</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 10%; text-align: center;">Kode</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Nama</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 5%; text-align: center;">Beli</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 5%; text-align: center;">Umum</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 5%; text-align: center;">H1</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 5%; text-align: center;">H2</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 5%; text-align: center;">H3</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%; text-align: center;">Aksi</th></tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $a)
                        <tr role="row" class="odd">
                            <td style="text-align: center;">{{ $no }}</td>
                            <td style="text-align: center;"><img style="width:90px; height:100px object-fit:cover;" src="{{$a->foto_barang == '' ? asset('uploads/noimg.png') : asset('uploads/small_'.$a->foto_barang)}}" alt=""></td>
                            <td style="text-align: center;"><a><h6 class="text-danger">{{ $a->kode}}</h6> </a></td>
                            <td style=""><h6 class="text-primary">{{ $a->nm_barang}}</h6><p><strong>Sedia : </strong>{{ $a->stok_b}} {{ $a->nm_sat}}</p></td>
                            <td style="text-align: center;">{{ $a->harga_beli_terkahir}}</td>
                            <td style="text-align: center;">{{ $a->h_jual}}</td>
                            <td style="text-align: center;">{{ $a->h1}}</td>
                            <td style="text-align: center;">{{ $a->h2}}</td>
                            <td style="text-align: center;">{{ $a->h3}}</td>
                            <td style="text-align: center; padding: 0px;">
                                <div class="button-list">
                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_barang)}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="btn-group">
                                            <input type="hidden" name="id_barang" value="{{$a->id_barang}}">
                                            <button type="submit" aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button>
                                            <a href="{{ url('a/edit/'.$a->id_barang) }}"><button aria-expanded="false" class="btn btn-primary btn-xs" type="button"><i class="fa fa-shopping-cart"></i></button></a>
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