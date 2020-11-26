@extends('template/page')
@section('content')
{{-- @foreach ($data as $a) --}}
	<div class="container-fluid pt-25">
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view pb-10">
					<h5 style="text-align:center;">Konfirmasi</h5>
				</div>
			</div>
        </div>
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view pb-10">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4 mb-20">
                                    <label class="control-label mb-10 text-left">Serial Number</label>
                                    <input type="text" class="form-control" name="csn" value="">
                                </div>
                                <div class="col-md-4 mb-20">
                                    <label class="control-label mb-10 text-left">No Surat Jalan / No Servis</label>
                                    <input type="text" class="form-control" name="csj" value="">
                                </div>
                                <div class="col-md-4 mb-20 pt-35">
                                    <button type="submit" class="btn btn-success btn-circle btn-sm" ><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tab-struct custom-tab-1">
                                        <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="tabs">
                                            <li role="presentation" class=""><a data-toggle="tab" id="tab_7" role="tab" href="#tab7" aria-expanded="false"><span>Servis<span class="label label-default ml-5">5</span></span></a></li>
                                            <li class="active" role="presentation"><a data-toggle="tab" id="tab_1" role="tab" href="#tab1" aria-expanded="true"><span>Minta Konfirmasi<span class="label label-warning ml-5">5</span></span></a></li>
                                            <li role="presentation" class=""><a data-toggle="tab" id="tab_2" role="tab" href="#tab2" aria-expanded="false"><span>Order Part<span class="label label-info ml-5">5</span></span></a></li>
                                            <li role="presentation" class=""><a data-toggle="tab" id="tab_3" role="tab" href="#tab3" aria-expanded="false"><span>Dikirim<span class="label label-primary ml-5">5</span></span></a></li>
                                            <li role="presentation" class=""><a data-toggle="tab" id="tab_4" role="tab" href="#tab4" aria-expanded="false"><span>Jadi Fix<span class="label label-success ml-5">5</span></span></a></li>
                                            <li role="presentation" class=""><a data-toggle="tab" id="tab_5" role="tab" href="#tab5" aria-expanded="false"><span>Batal<span class="label label-danger ml-5">5</span></span></a></li>
                                            <li role="presentation" class=""><a data-toggle="tab" id="tab_6" role="tab" href="#tab6" aria-expanded="false"><span>Urgent<span class="label label-danger ml-5">5</span></span></a></li>
                                        </ul>
                                        <div class="tab-content" id="tabs">
                                            <div id="tab1" class="tab-pane fade active in" role="tabpanel">
                                                <div class="panel panel-warning card-view">
                                                    <div class="panel-heading">
                                                        <div class="pull-left">
                                                            <p class="panel-title txt-light">Minta Konfirmasi</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <table id="datable_1" class="table table-hover display pb-30 dataTable" role="grid" aria-describedby="datable_1_info" >
                                                        <thead class="mb-10">
                                                            <tr>
                                                                <th style="width:10%; text-align: center; border-bottom: 0px;">Status</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Barang</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Pelanggan</th>
                                                                <th style="width:10%; text-align: center; border-bottom: 0px;">Penanganan</th>
                                                                <th style="width:10%; text-align: center; border-bottom: 0px;">Keterangan</th>
                                                                <th style="width:10%; text-align: center; border-bottom: 0px;">No Surat Jalan</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row"  class="odd">
                                                                <td colspan="7" style="border:0px; padding : 0px;"><p class="btn btn-primary btn-xs btn-rounded" style="border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;" >Sunarno</p></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td style="text-align: center;">Analisa</td>
                                                                <td style="text-align: center;">Komputer CPU Adata 022</td>
                                                                <td style="text-align: center;">BPD desa Geger</td>
                                                                <td style="text-align: center;"><button class="btn btn-danger btn-xs btn-rounded" style="margin-right: 0;">Ganti Teknisi</button></td>
                                                                <td style="text-align: center;">BPD desa Geger</td>
                                                                <td style="text-align: center;"><a href="wow">aaaaa</a></td>
                                                                <td  style="text-align: center;">
                                                                    <div class="button-list">
                                                                        <button class="btn btn-default btn-circle btn-sm" ><i class="fa fa-diamond"></i></button>
                                                                        <button class="btn btn-primary btn-circle btn-sm"><i class="fa fa-envelope"></i></button>
                                                                        <button class="btn btn-success btn-circle btn-sm"><i class="fa fa-whatsapp"></i></button>
                                                                        {{-- <button class="btn btn-info btn-square btn-sm">5</button> --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr role="row"  class="odd">
                                                                <td colspan="7" style="border:0px; padding : 0px;"><p class="btn btn-primary btn-xs btn-rounded" style="border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;" >Sunarno</p></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td style="text-align: center;">Analisa/Proses</td>
                                                                <td style="text-align: center;">Komputer CPU Adata 022</td>
                                                                <td style="text-align: center;">BPD desa Geger</td>
                                                                <td style="text-align: center;"><button class="btn btn-danger btn-xs btn-rounded" style="margin-right: 0;">Ganti Teknisi</button></td>
                                                                <td style="text-align: center;">BPD desa Geger</td>
                                                                <td style="text-align: center;"><a href="wow">aaaaa</a></td>
                                                                <td  style="text-align: center;">
                                                                    <div class="button-list">
                                                                        <button class="btn btn-default btn-circle btn-sm" ><i class="fa fa-diamond"></i></button>
                                                                        <button class="btn btn-primary btn-circle btn-sm"><i class="fa fa-envelope"></i></button>
                                                                        <button class="btn btn-success btn-circle btn-sm"><i class="fa fa-whatsapp"></i></button>
                                                                        {{-- <button class="btn btn-info btn-square btn-sm">5</button> --}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="tab2" class="tab-pane fade" role="tabpanel">
                                                <div class="panel panel-info card-view">
                                                    <div class="panel-heading mb-10">
                                                        <div class="pull-left">
                                                            <p class="panel-title txt-light">Order Part</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <table id="datable_1" class="table table-hover display pb-30 dataTable" role="grid" aria-describedby="datable_1_info" >
                                                        <thead class="mb-10">
                                                            <tr>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Barang</th>
                                                                <th style="width:10%; text-align: center; border-bottom: 0px;">Pelanggan</th>
                                                                <th style="width:10%; text-align: center; border-bottom: 0px;">Harga</th>
                                                                <th style="width:5%; text-align: center; border-bottom: 0px;">Surat Jalan</th>
                                                                <th style="width:30%; text-align: center; border-bottom: 0px;">Order Part</th>
                                                                <th style="width:15%; text-align: center; border-bottom: 0px;">Link Pembelian</th>
                                                                <th style="width:10%; text-align: center; border-bottom: 0px;">Barang Sampai</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row"  class="odd">
                                                                <td colspan="7" style="border:0px; padding : 0px;"><p class="btn btn-primary btn-xs btn-rounded" style="border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;" >Sunarno</p></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td style="text-align: center;"><span class="pull-left"><button class="btn btn-default btn-circle btn-sm" style="margin-top: 0;" ><i class="fa fa-diamond"></i></button></span> CPU Adata 022</td>
                                                                <td style="text-align: center;">BPD desa Geger</td>
                                                                <td style="text-align: center;">4000000</td>
                                                                <td style="text-align: center;"><a href="wow">aaaaa</a></td>
                                                                <td style="text-align: center;">kiybod</td>
                                                                <td  style="text-align: center;">
                                                                    <div class="button-list">
                                                                        <button class="btn btn-primary btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-shopping-basket"></i></button>
                                                                    </div>
                                                                </td>
                                                                <td  style="text-align: center;">
                                                                    <i class="fa fa-check"></i>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="tab3" class="tab-pane fade" role="tabpanel">
                                                <div class="panel panel-primary card-view">
                                                    <div class="panel-heading mb-10">
                                                        <div class="pull-left">
                                                            <p class="panel-title txt-light">Dikirim</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <table id="datable_1" class="table table-hover display pb-30 dataTable" role="grid" aria-describedby="datable_1_info" >
                                                        <thead class="mb-10">
                                                            <tr>
                                                                <th style="width:5%; text-align: center; border-bottom: 0px;">Status</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Barang</th>
                                                                <th style="width:10%; text-align: center; border-bottom: 0px;">Pelanggan</th>
                                                                <th style="width:30%; text-align: center; border-bottom: 0px;">SPK Rekanan</th>
                                                                <th style="width:10%; text-align: center; border-bottom: 0px;">Surat Jalan</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row"  class="odd">
                                                                <td colspan="7" style="border:0px; padding : 0px;"><p class="btn btn-primary btn-xs btn-rounded" style="border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;" >Sunarno</p></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td style="text-align: center;">Dikirim</td>
                                                                <td style="text-align: center;">CPU Adata 022</td>
                                                                <td style="text-align: center;">BPD desa Geger</td>
                                                                <td style="text-align: center;">asadasfgdgdfhfdhfhdf</td>
                                                                <td style="text-align: center;"><a href="wow">aaaaa</a></td>
                                                                <td  style="text-align: center;">
                                                                    <div class="button-list">
                                                                        <button class="btn btn-warning btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-reply"></i></button>
                                                                        <button class="btn btn-primary btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-envelope"></i></button>
                                                                        <button class="btn btn-success btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-whatsapp"></i></button>
                                                                        <button class="btn btn-default btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-diamond"></i></button>
                                                                        <button class="btn btn-info btn-square btn-sm" style="margin-top: 0;">9</button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="tab4" class="tab-pane fade" role="tabpanel">
                                                <div class="panel panel-success card-view">
                                                    <div class="panel-heading mb-10">
                                                        <div class="pull-left">
                                                            <p class="panel-title txt-light">Jadi Fix</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <table id="datable_1" class="table table-hover display pb-30 dataTable" role="grid" aria-describedby="datable_1_info" >
                                                        <thead class="mb-10">
                                                            <tr>
                                                                <th style="width:15%; text-align: center; border-bottom: 0px;">Status</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Barang</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Pelanggan</th>
                                                                <th style="width:15%; text-align: center; border-bottom: 0px;">Surat Jalan</th>
                                                                <th style="width:30%; text-align: center; border-bottom: 0px;">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row"  class="odd">
                                                                <td colspan="7" style="border:0px; padding : 0px;"><p class="btn btn-primary btn-xs btn-rounded" style="border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;" >Sunarno</p></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td style="text-align: center;">Dikirim</td>
                                                                <td style="text-align: center;">CPU Adata 022</td>
                                                                <td style="text-align: center;">BPD desa Geger</td>
                                                                <td style="text-align: center;"><a href="wow">aaaaa</a></td>
                                                                <td  style="text-align: center;">
                                                                    <div class="button-list">
                                                                        <button class="btn btn-success btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-check"></i></button>
                                                                        <button class="btn btn-success btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-whatsapp"></i></button>
                                                                        <button class="btn btn-primary btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-envelope"></i></button>
                                                                        <button class="btn btn-default btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-diamond"></i></button>
                                                                        <button class="btn btn-danger btn-circle btn-sm" style="margin-top: 0;"><i class="fa  fa-plus-square"></i></button>
                                                                        <button class="btn btn-info btn-square btn-sm" style="margin-top: 0;">9</button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="tab5" class="tab-pane fade" role="tabpanel">
                                                <div class="panel panel-danger card-view">
                                                    <div class="panel-heading mb-10">
                                                        <div class="pull-left">
                                                            <p class="panel-title txt-light">Batal</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div> 
                                                    <table id="datable_1" class="table table-hover display pb-30 dataTable" role="grid" aria-describedby="datable_1_info" >
                                                        <thead class="mb-10">
                                                            <tr>
                                                                <th style="width:15%; text-align: center; border-bottom: 0px;">Status</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Barang</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Pelanggan</th>
                                                                <th style="width:15%; text-align: center; border-bottom: 0px;">Surat Jalan</th>
                                                                <th style="width:30%; text-align: center; border-bottom: 0px;">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row"  class="odd">
                                                                <td colspan="7" style="border:0px; padding : 0px;"><p class="btn btn-primary btn-xs btn-rounded" style="border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;" >Sunarno</p></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td style="text-align: center;">Dikirim</td>
                                                                <td style="text-align: center;">CPU Adata 022</td>
                                                                <td style="text-align: center;">BPD desa Geger</td>
                                                                <td style="text-align: center;"><a href="wow">aaaaa</a></td>
                                                                <td  style="text-align: center;">
                                                                    <div class="button-list">
                                                                        <button class="btn btn-success btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-check"></i></button>
                                                                        <button class="btn btn-success btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-whatsapp"></i></button>
                                                                        <button class="btn btn-primary btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-envelope"></i></button>
                                                                        <button class="btn btn-danger btn-circle btn-sm" style="margin-top: 0;"><i class="fa  fa-plus-square"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> 
                                            </div>
                                            <div id="tab6" class="tab-pane fade" role="tabpanel">
                                                <div class="panel panel card-view">
                                                    <div class="panel-heading mb-10" style="background-color: #f04c4c">
                                                        <div class="pull-left">
                                                            <p class="panel-title txt-light">Urgent</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <table id="datable_1" class="table table-hover display pb-30 dataTable" role="grid" aria-describedby="datable_1_info" >
                                                        <thead class="mb-10">
                                                            <tr>
                                                                <th style="width:15%; text-align: center; border-bottom: 0px;">Status</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Barang</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Pelanggan</th>
                                                                <th style="width:15%; text-align: center; border-bottom: 0px;">Surat Jalan</th>
                                                                <th style="width:30%; text-align: center; border-bottom: 0px;">Catatan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row"  class="odd">
                                                                <td colspan="7" style="border:0px; padding : 0px;"><p class="btn btn-primary btn-xs btn-rounded" style="border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;" >Sunarno</p></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td style="text-align: center;">Dikirim</td>
                                                                <td style="text-align: center;">CPU Adata 022</td>
                                                                <td style="text-align: center;">BPD desa Geger</td>
                                                                <td style="text-align: center;"><a href="wow">aaaaa</a></td>
                                                                <td class="text-danger" style="text-align: center;">wqowqowio</td>
                                                            </tr>
                                                            <tr role="row"  class="odd">
                                                                <td colspan="7" style="border:0px; padding : 0px;"><p class="btn btn-primary btn-xs btn-rounded" style="border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;" >Sunarno</p></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="tab7" class="tab-pane fade" role="tabpanel">
                                                <div class="panel panel card-view">
                                                    <div class="panel-heading mb-10" style="background: rgb(205,54,216); background: -moz-linear-gradient(-45deg,  rgb(205,54,216) 0%, rgb(159,83,239) 55%, rgb(182,137,255) 100%); background: -webkit-linear-gradient(-45deg,  rgb(205,54,216) 0%,rgb(159,83,239) 55%,rgb(182,137,255) 100%); background: linear-gradient(135deg,  rgb(205,54,216) 0%,rgb(159,83,239) 55%,rgb(182,137,255) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cd36d8', endColorstr='#b689ff',GradientType=1 );">
                                                        <div class="pull-left">
                                                            <p class="panel-title txt-light">Servis</p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <table id="datable_1" class="table table-hover display pb-30 dataTable" role="grid" aria-describedby="datable_1_info" >
                                                        <thead class="mb-10">
                                                            <tr>
                                                                <th style="width:15%; text-align: center; border-bottom: 0px;">Status</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Barang</th>
                                                                <th style="width:20%; text-align: center; border-bottom: 0px;">Pelanggan</th>
                                                                <th style="width:15%; text-align: center; border-bottom: 0px;">Surat Jalan</th>
                                                                <th style="width:30%; text-align: center; border-bottom: 0px;">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row"  class="odd">
                                                                <td colspan="7" style="border:0px; padding : 0px;"><p class="btn btn-primary btn-xs btn-rounded" style="border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;" >Sunarno</p></td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td style="text-align: center;">Dikirim</td>
                                                                <td style="text-align: center;">CPU Adata 022</td>
                                                                <td style="text-align: center;">BPD desa Geger</td>
                                                                <td style="text-align: center;"><a href="wow">aaaaa</a></td>
                                                                <td  style="text-align: center;">
                                                                    <div class="button-list">
                                                                        <button class="btn btn-success btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-whatsapp"></i></button>
                                                                        <button class="btn btn-primary btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-envelope"></i></button>
                                                                        <button class="btn btn-default btn-circle btn-sm" style="margin-top: 0;"><i class="fa fa-diamond"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
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
			</div>
		</div>

    </div>
{{-- @endforeach --}}
@endsection