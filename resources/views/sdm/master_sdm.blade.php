@extends('template/page')
@section('content')
	<div class="container-fluid pt-25">
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view"style="padding: 15px;">
					<h5 style="text-align:center;">Master SDM & Karyawan</h5>
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
                                    <li class="active" role="presentation"><a data-toggle="tab" id="tab_1" role="tab" href="#tab1" aria-expanded="true"><span>Data Status</span></a></li>
                                    <li role="presentation" class="next"><a aria-expanded="false" data-toggle="tab" role="tab" id="tab_2" href="#tab2"><span>Data Sekolah</span></a></li>
                                    <li role="presentation" class=""><a data-toggle="tab" id="tab_3" role="tab" href="#tab3" aria-expanded="false"><span>Data Jurusan</span></a></li>
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
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Status">
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
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Status</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($status as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_sdm_status}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_sdm_status)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_sdm_status" value="{{$a->id_sdm_status}}">
                                                                            <a href="{{ url('a/edit/'.$a->id_sdm_status) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
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
                                                    {!! $status->appends(['sort' => 'votes'])->links() !!}
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
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Sekolah">
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
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Nama Sekolah</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($sekolah as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_sekolah}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_sekolah)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_sekolah" value="{{$a->id_sekolah}}">
                                                                            <a href="{{ url('a/edit/'.$a->id_sekolah) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
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
                                                    {!! $sekolah->appends(['sort' => 'votes'])->links() !!}
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
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Jurusan">
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
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Nama Jurusan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($jurusan as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_sdm_jurusan}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_sdm_jurusan)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_sdm_jurusan" value="{{$a->id_sdm_jurusan}}">
                                                                            <a href="{{ url('a/edit/'.$a->id_sdm_jurusan) }}"><button aria-expanded="false" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>
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
                                                    {!! $jurusan->appends(['sort' => 'votes'])->links() !!}
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
        