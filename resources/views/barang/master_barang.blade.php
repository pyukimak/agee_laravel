@extends('template/page')
@section('content')
	<div class="container-fluid pt-25">
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view"style="padding: 15px;">
					<h5 style="text-align:center;">Master Barang</h5>
				</div>
			</div>
        </div>
        <div class="row">
             <div class="col-md-12 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pb-0">
                            <div class="tab-struct custom-tab-1">
                                <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="tabs">
                                    <li class="active" role="presentation"><a data-toggle="tab" id="tab_1" role="tab" href="#tab1" aria-expanded="true"><span>Kategori Barang</span></a></li>
                                    <li role="presentation" class="next"><a aria-expanded="false" data-toggle="tab" role="tab" id="tab_2" href="#tab2"><span>Data Satuan</span></a></li>
                                    <li role="presentation" class="next"><a aria-expanded="false" data-toggle="tab" role="tab" id="tab_3" href="#tab3"><span>Data Merk</span></a></li>
                                    <li role="presentation" class="next"><a aria-expanded="false" data-toggle="tab" role="tab" id="tab_4" href="#tab4"><span>Rekanan Leasing</span></a></li>
                                </ul>
                                <div class="tab-content" id="tabs">
                                    <div id="tab1" class="tab-pane fade active in" role="tabpanel">
                                        <div class="row mb-10 mr-20 ml-20">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-6 mb-10">
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Kategori">
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
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Kategori</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($kategori as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nm_kat}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_kat)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_kat" value="{{$a->id_kat}}">
                                                                            <a href="{{ url('a/edit/'.$a->id_kat) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
                                                                            <button type="submit" aria-expanded="false" class="btn btn-danger btn-xs" type="button"><i class="fa fa-trash"></i></button>
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
                                                    {!! $kategori->appends(['sort' => 'votes'])->links() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab2" class="tab-pane fade" role="tabpanel">
                                        <div class="row mb-10 mr-20 ml-20">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-6 mb-10">
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Satuan">
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
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Satuan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($satuan as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nm_sat}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_sat)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_sat" value="{{$a->id_sat}}">
                                                                            <a href="{{ url('a/edit/'.$a->id_sat) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
                                                                            <button type="submit" aria-expanded="false" class="btn btn-danger btn-xs" type="button"><i class="fa fa-trash"></i></button>
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
                                                    {!! $satuan->appends(['sort' => 'votes'])->links() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab3" class="tab-pane fade" role="tabpanel">
                                        <div class="row mb-10 mr-20 ml-20">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-6 mb-10">
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Merk">
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
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Merk</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($merk as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nm_merk}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_merk)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_merk" value="{{$a->id_merk}}">
                                                                            <a href="{{ url('a/edit/'.$a->id_merk) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
                                                                            <button type="submit" aria-expanded="false" class="btn btn-danger btn-xs" type="button"><i class="fa fa-trash"></i></button>
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
                                                    {!! $merk->appends(['sort' => 'votes'])->links() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab4" class="tab-pane fade" role="tabpanel">
                                        <div class="row mb-10 mr-20 ml-20">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-6 mb-10">
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Leasing">
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
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Leasing</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($leasing as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_leasing}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_leasing)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_leasing" value="{{$a->id_leasing}}">
                                                                            <a href="{{ url('a/edit/'.$a->id_leasing) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
                                                                            <button type="submit" aria-expanded="false" class="btn btn-danger btn-xs" type="button"><i class="fa fa-trash"></i></button>
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
                                                    {!! $leasing->appends(['sort' => 'votes'])->links() !!}
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
@endsection