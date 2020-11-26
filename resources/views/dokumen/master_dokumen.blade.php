@extends('template/page')
@section('content')
	<div class="container-fluid pt-25">
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view"style="padding: 15px;">
					<h5 style="text-align:center;">Master Arsip & Project</h5>
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
                                    <li class="active" role="presentation"><a data-toggle="tab" id="tab_1" role="tab" href="#tab1" aria-expanded="true"><span>Data Jenis Pengadaan Doc</span></a></li>
                                    <li role="presentation" class="next"><a aria-expanded="false" data-toggle="tab" role="tab" id="tab_2" href="#tab2"><span>Data Bank Doc</span></a></li>
                                    <li role="presentation" class="next"><a aria-expanded="false" data-toggle="tab" role="tab" id="tab_3" href="#tab3"><span>Data Jenis Pajak Doc</span></a></li>
                                    <li role="presentation" class="next"><a aria-expanded="false" data-toggle="tab" role="tab" id="tab_4" href="#tab4"><span>Data Laporan Jenis Pajak Doc</span></a></li>
                                    <li role="presentation" class="next"><a aria-expanded="false" data-toggle="tab" role="tab" id="tab_5" href="#tab5"><span>Data Akun External</span></a></li>
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
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Pengadaan Doc">
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
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Jenis Pengadaan Doc</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($jenis as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_doc_jenis_pengadaan}}</h6></td>
                                                            <td style=""></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_doc_jenis_pengadaan)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_doc_jenis_pengadaan" value="{{$a->id_doc_jenis_pengadaan}}">
                                                                            <a href="{{ url('a/edit/'.$a->id_doc_jenis_pengadaan) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
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
                                                    {!! $jenis->appends(['sort' => 'votes'])->links() !!}
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
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Bank">
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
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Nama Bank</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%; text-align: center;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%; text-align: center;">Saldo Awal</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($bank as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_bank}}</h6></td>
                                                            <td style="text-align: center;"></td>
                                                            <td style="text-align: center;">{{ $a->saldo_awal }}</td>
                                                            <?php $no++; ?>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="dataTables_paginate paging_simple_numbers pull-right mr-10" id="datable_1_paginate">
                                                    {!! $bank->appends(['sort' => 'votes'])->links() !!}
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
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Jenis Pajak">
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
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Jenis Pajak</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($pajak as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_pajak}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_pajak)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_pajak" value="{{$a->id_pajak}}">
                                                                            <a href="{{ url('a/edit/'.$a->id_pajak) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
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
                                                    {!! $pajak->appends(['sort' => 'votes'])->links() !!}
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
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Laporan Pajak">
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
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Laporan Jenis Pajak</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($laporan as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_laporan_pajak}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_laporan_pajak)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_laporan_pajak" value="{{$a->id_laporan_pajak}}">
                                                                            <a href="{{ url('a/edit/'.$a->id_laporan_pajak) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
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
                                                    {!! $laporan->appends(['sort' => 'votes'])->links() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab5" class="tab-pane fade" role="tabpanel">
                                        <div class="row mb-10 mr-20 ml-20">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-6 mb-10">
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Akun">
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
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Akun</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Alamat Web Akun/Email</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Username</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 10%;">Password</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($akun as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_miror}}</h6></td>
                                                            <td style="">{{ $a->alamat_miror }}</td>
                                                            <td style="">{{ $a->username_miror }}</td>
                                                            <td style="">{{ $a->pass_miror }}</td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_miror)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_miror" value="{{$a->id_miror}}">
                                                                            <a href="{{ url('a/edit/'.$a->id_miror) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
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
                                                    {!! $akun->appends(['sort' => 'votes'])->links() !!}
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