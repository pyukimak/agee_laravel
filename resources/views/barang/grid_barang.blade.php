
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
                        <a href="{{ url('/sdm/tambah') }}"><button class="btn btn-primary btn-circle btn-sm"><i class="fa fa-th-large"></i></button></a>
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
                <div class="col-md-12">
                    @foreach ($data as $a)
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6" style="width: 227px; height:400px">
                            <div class="panel panel-default card-view pa-0">
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body pa-0">
                                        <article class="col-item">
                                            <div class="photo">
                                                <a href="javascript:void(0);"> <img src="{{$a->foto_barang == '' ? asset('uploads/285x355.jpg') : asset('uploads/small_'.$a->foto_barang)}}" class="img-responsive" alt="Product Image"> </a>
                                            </div>
                                            <div class="info">
                                                <h6>{{ $a->nm_barang}}</h6>
                                                <p class="text-primary">{{ $a->kode}}</p>
                                                <span class="head-font block text-warning font-16">{{ $a->h_jual}}</span>
                                                <form method="POST" action="{{ url('barang/detail/'.$a->id_barang)}}" enctype="multipart/form-data">
                                                    @csrf
												    <input type="hidden" name="id_barang" value="{{$a->id_barang}}">
                                                    <button class="btn btn-primary btn-xs mb-10 ml-10" type="submit">Detail</button>
                                                </form>
                                                <button class="btn btn-primary btn-xs mb-10">Beli</button>
                                            </div>
                                        </article>
                                    </div>
                                </div>	
                            </div>	
                        </div>
                    @endforeach
                    <div class="dataTables_paginate paging_simple_numbers pull-right mr-10" id="datable_1_paginate">
                        {!! $data->appends(['sort' => 'votes'])->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection