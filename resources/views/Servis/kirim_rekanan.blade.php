@extends('template/page')
@section('content')
@foreach ($data as $a)
	<div class="container-fluid pt-25">
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view"style="padding: 15px;">
					<h5 style="text-align:center;">Kirim Rekanan</h5>
				</div>
			</div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default card-view"style="padding: 15px;">
                                <h5 style="text-align:center;">Dikirim Ke :</h5>
                            </div>
                        </div>
                        <div class="panel-body mr-10">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="exampleInputuname_4" class="col-md-3 control-label">Nama Rekanan</label>
                                    <div class="col-md-9">
                                        <div class="col-md-12 input-group">
                                            <input type="text" class="form-control" id="exampleInputuname_4">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputuname_4" class="col-md-3 control-label">Estimasi Hari</label>
                                    <div class="col-md-9">
                                        <div class="col-md-12 input-group">
                                            <input type="text" class="form-control" id="exampleInputuname_4">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputuname_4" class="col-md-3 control-label">No Bukti Expedisi</label>
                                    <div class="col-md-9">
                                        <div class="col-md-12 input-group">
                                            <input type="text" class="form-control" id="exampleInputuname_4">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="col-md-offset-3 col-md-9 ">
                                        <button type="submit" class="btn btn-primary pull-right">Simpan Transaksi</button>
                                        <button type="submit" class="btn btn-danger btn-outline pull-right">Kosongkan Transaksi</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pb-0">
                            <div class="tab-struct custom-tab-1">
                                <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="tabs">
                                    <li class="active" role="presentation"><a data-toggle="tab" id="tab_1" role="tab" href="#tab1" aria-expanded="true"><span>Detail</span></a></li>
                                    <li role="presentation" class="next"><a aria-expanded="false" data-toggle="tab" role="tab" id="tab_2" href="#tab2"><span>Barang</span></a></li>
                                    <li role="presentation" class=""><a data-toggle="tab" id="tab_3" role="tab" href="#tab3" aria-expanded="false"><span>Pemilik</span></a></li>
                                    <li role="presentation" class=""><a data-toggle="tab" id="tab_4" role="tab" href="#tab4" aria-expanded="false"><span>History</span></a></li>
                                </ul>
                                <div class="tab-content" id="tabs">
                                    <div id="tab1" class="tab-pane fade active in" role="tabpanel">
                                        <div class="row mb-10">
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Operator</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Tanggal Transaksi</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Kepada</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>No Bukti Expedisi</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Estimasi</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab2" class="tab-pane fade" role="tabpanel">
                                        <div class="row ml-10">
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Nama Barang</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->nama_kategori}} {{ $a->nama_merk}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Serial (SN)</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8 text-primary">{{ $a->serial}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Surat Jalan (SJ)</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8 text-info">{{ $a->no_surat_jalan}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Keterangan</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->ket2}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Kelengkapan</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->kelengkapan}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Keluhan</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->keluhan}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Teknisi</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->sdm_nama_karyawan}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab3" class="tab-pane fade" role="tabpanel">
                                        <div class="col-md-12 pb-20">
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Nama Barang</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->nama_pelanggan}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Tanggal Lahir</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->tgl_lahir}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Alamat</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->alamat}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>No Telepon</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->no_sms}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>WhatsApp</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->ket}}</div>
                                            </div>
                                        </div>	
                                    </div>
                                    <div id="tab4" class="tab-pane fade" role="tabpanel">
                                        <div class="col-md-12 pb-20">
                                            
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
@endforeach
@endsection