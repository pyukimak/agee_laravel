@extends('template/page')
@section('content')
	<div class="container-fluid pt-25">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Data Kelompok Pelanggan</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <div class="col-md-6 mb-10">
                            <input type="text" class="form-control" name="cnm" placeholder="Nama Kelompok">
                        </div>
                        <div class="col-md-6 mb-10">
                            <a href="{{ url('/sdm/tambah') }}"><button class="btn btn-success btn-circle btn-sm"><i class="fa fa-plus"></i></button></a>
                            <a href="/rekanan"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
                            <button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                    <thead>
                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:20%; text-align: center;">Icon</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Nama Kelompok</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 10%; text-align: center;">Harga Jual</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%; text-align: center;">Aksi</th></tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($data as $a)
                        <tr role="row" class="odd">
                            <td style="text-align: center;">{{ $no }}</td>
                            <td style="text-align: center;"><img style="width:90px; height:100px object-fit:cover;" src="{{$a->icon == '' ? asset('uploads/noimg.png') : asset('uploads/small_'.$a->icon)}}" alt=""></td>
                            <td style=""><h6 class="text-primary">{{ $a->nama_kelompok}}</h6></td>
                            <td style="text-align: center;">{{ $a->paket_harga}}</td>
                            <td style="text-align: center; padding: 0px;">
                                <div class="button-list">
                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_kelompok)}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="btn-group">
                                            <input type="hidden" name="id_kelompok" value="{{$a->id_kelompok}}">
                                            <button type="submit" aria-expanded="false" class="btn btn-danger btn-xs" type="button"><i class="fa fa-trash"></i></button>
                                            <a href="{{ url('a/edit/'.$a->id_kelompok) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
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