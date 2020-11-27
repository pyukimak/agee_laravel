@extends('template/page')
@section('content')
	<div class="container-fluid pt-25">
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view"style="padding: 15px;">
					<h5 style="text-align:center;">Master Servis & Part</h5>
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
                                    <li class="active" role="presentation"><a data-toggle="tab" id="tab_1" role="tab" href="#tab1" aria-expanded="true"><span>Data Kategori</span></a></li>
                                    <li role="presentation" class="next"><a aria-expanded="false" data-toggle="tab" role="tab" id="tab_2" href="#tab2"><span>Data Kelengkapan</span></a></li>
                                    <li role="presentation" class=""><a data-toggle="tab" id="tab_3" role="tab" href="#tab3" aria-expanded="false"><span>Data Jenis</span></a></li>
                                    <li role="presentation" class=""><a data-toggle="tab" id="tab_4" role="tab" href="#tab4" aria-expanded="false"><span>Data Kondisi</span></a></li>
                                    <li role="presentation" class=""><a data-toggle="tab" id="tab_5" role="tab" href="#tab5" aria-expanded="false"><span>Data Rak</span></a></li>
                                    <li role="presentation" class=""><a data-toggle="tab" id="tab_6" role="tab" href="#tab6" aria-expanded="false"><span>Data Kategori Jasa</span></a></li>
                                </ul>
                                <div class="tab-content" id="tabs">
                                    <div id="tab1" class="tab-pane fade active in" role="tabpanel">
                                        <div class="row ml-20 mr-20 mb-10">
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
                                                            <button type="button" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#kategori"><i class="fa fa-plus"></i></button>
                                                            <a href="/rekanan"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
                                                            <button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                                    <thead>
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:20%; text-align: center;">Icon</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Kategori</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($kategori as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style="text-align: center;"><img style="width:90px; height:100px object-fit:cover;" src="{{$a->icon == '' ? asset('uploads/noimg.png') : asset('uploads/small_'.$a->icon)}}" alt=""></td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_kategori}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_kategori)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_kategori" value="{{$a->id_kategori}}">
                                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#kategori"><i class="fa fa-pencil"></i></button>
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
                                        <div class="row ml-20 mr-20 mb-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-6 mb-10">
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Kelengkapan">
                                                        </div>
                                                        <div class="col-md-6 mb-10">
                                                            <button type="button" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#kelengkapan"><i class="fa fa-plus"></i></button>
                                                            <a href="/rekanan"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
                                                            <button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                                    <thead>
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Kelengkapan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($kelengkapan as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_kelengkapan}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_kelengkapan)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_kelengkapan" value="{{$a->id_kelengkapan}}">
                                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#kelengkapan"><i class="fa fa-pencil"></i></button>
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
                                                    {!! $kelengkapan->appends(['sort' => 'votes'])->links() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab3" class="tab-pane fade" role="tabpanel">
                                        <div class="row ml-20 mr-20 mb-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-6 mb-10">
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Jenis">
                                                        </div>
                                                        <div class="col-md-6 mb-10">
                                                            <button type="button" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#jenis"><i class="fa fa-plus"></i></button>
                                                            <a href="/rekanan"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
                                                            <button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                                    <thead>
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Jenis</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($jenis as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_jenisbrg}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_jenisbrg)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_jenisbrg" value="{{$a->id_jenisbrg}}">
                                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#jenis"><i class="fa fa-pencil"></i></button>
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
                                    <div id="tab4" class="tab-pane fade" role="tabpanel">
                                        <div class="row ml-20 mr-20 mb-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-6 mb-10">
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Kondisi">
                                                        </div>
                                                        <div class="col-md-6 mb-10">
                                                            <button type="button" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#kondisi"><i class="fa fa-plus"></i></button>
                                                            <a href="/rekanan"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
                                                            <button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                                    <thead>
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Kondisi</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($kondisi as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_kondisipart}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_kondisipart)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_kondisipart" value="{{$a->id_kondisipart}}">
                                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#kondisi"><i class="fa fa-pencil"></i></button>
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
                                                    {!! $kondisi->appends(['sort' => 'votes'])->links() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab5" class="tab-pane fade" role="tabpanel">
                                        <div class="row ml-20 mr-20 mb-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-6 mb-10">
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Rak">
                                                        </div>
                                                        <div class="col-md-6 mb-10">
                                                            <button type="button" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#rak"><i class="fa fa-plus"></i></button>
                                                            <a href="/rekanan"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
                                                            <button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                                    <thead>
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Rak</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($rak as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_rak}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_rak)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_rak" value="{{$a->id_rak}}">
                                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#rak"><i class="fa fa-pencil"></i></button>
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
                                                    {!! $rak->appends(['sort' => 'votes'])->links() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab6" class="tab-pane fade" role="tabpanel">
                                        <div class="row ml-20 mr-20 mb-10">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-md-6 mb-10">
                                                            <input type="text" class="form-control" name="cnm" placeholder="Nama Kategori Jasa">
                                                        </div>
                                                        <div class="col-md-6 mb-10">
                                                            <button type="button" class="btn btn-success btn-circle btn-sm" data-toggle="modal" data-target="#jasa"><i class="fa fa-plus"></i></button>
                                                            <a href="/rekanan"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
                                                            <button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                                    <thead>
                                                        <tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:10%; text-align: center;">No</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 20%;">Nama Kategori Jasa</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 30%;">Keterangan</th><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width: 40%; text-align: center;">Aksi</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        @foreach ($jasa as $a)
                                                        <tr role="row" class="odd">
                                                            <td style="text-align: center;">{{ $no }}</td>
                                                            <td style=""><h6 class="text-primary">{{ $a->nama_jasa}}</h6></td>
                                                            <td></td>
                                                            <td style="text-align: center; padding: 0px;">
                                                                <div class="button-list">
                                                                    <form role="form" method="POST" action="{{ url('a/detail/'.$a->id_jasa)}}" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="btn-group">
                                                                            <input type="hidden" name="id_jasa" value="{{$a->id_jasa}}">
                                                                            <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#jasa"><i class="fa fa-pencil"></i></button>
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
                                                    {!! $jasa->appends(['sort' => 'votes'])->links() !!}
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
        <!-- Modal kategori -->
        <div class="modal fade" id="kategori" tabindex="-1" aria-labelledby="kategoriLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kategoriLabel">Tambah / Edit Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal kelengkapan -->
        <div class="modal fade" id="kelengkapan" tabindex="-1" aria-labelledby="kelengkapanLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kelengkapanLabel">Tambah / Edit Kelengkapan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal jenis -->
        <div class="modal fade" id="jenis" tabindex="-1" aria-labelledby="jenisLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jenisLabel">Tambah / Edit Jenis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal kondisi -->
        <div class="modal fade" id="kondisi" tabindex="-1" aria-labelledby="kondisiLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kondisiLabel">Tambah / Edit Kondisi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal rak -->
        <div class="modal fade" id="rak" tabindex="-1" aria-labelledby="rakLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rakLabel">Tambah / Edit Rak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal jasa -->
        <div class="modal fade" id="jasa" tabindex="-1" aria-labelledby="jasaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jasaLabel">Tambah / Edit Jasa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
        