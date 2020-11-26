@extends('template/page')
@section('content')
@foreach ($data as $a)
	<div class="container-fluid pt-25">
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view"style="padding: 15px;">
					<h5 style="text-align:center;">Detail SDM</h5>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-3 col-xs-12">
                <div class="panel panel-default card-view  pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body  pa-0">
                            <div class="profile-box">
                                <div class="profile-cover-pic">
                                    <div class="profile-image-overlay"></div>
                                </div>
                                <div class="profile-info text-center">
                                    <div class="profile-img-wrap">
                                        <img class="inline-block mb-10" src="{{$a->foto_diri == '' ? asset('uploads/noimg.png') : asset('uploads/small_'.$a->foto_diri)}}" alt="user">
                                    </div>	
                                    <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">{{$a->nama_karyawan}}</h5>
                                    <h6 class="block capitalize-font pb-20">{{$a->nama_sdm_status}}</h6>
                                </div>	
                                <div class="social-info">
                                    <button class="btn btn-primary btn-block btn-outline btn-anim mt-10" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><span class="btn-text">edit profile</span></button>
                                    <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
                                                </div>
                                                <div class="modal-body">
                                                   
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pb-0">
                            <div class="tab-struct custom-tab-1">
                                <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="tabs">
                                    <li class="active" role="presentation"><a data-toggle="tab" id="tab_1" role="tab" href="#tab1" aria-expanded="true"><span>Detail SDM</span></a></li>
                                    <li role="presentation" class="next"><a aria-expanded="false" data-toggle="tab" role="tab" id="tab_2" href="#tab2"><span>Cetak Dokumen</span></a></li>
                                    <li role="presentation" class=""><a data-toggle="tab" id="tab_3" role="tab" href="#tab3" aria-expanded="false"><span>Lainnya</span></a></li>
                                </ul>
                                <div class="tab-content" id="tabs">
                                    <div id="tab1" class="tab-pane fade active in" role="tabpanel">
                                        <div class="row mb-10">
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Kode</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8 text-primary">{{ $a->kd_karyawan}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Status</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->nama_sdm_status}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Sekolah</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->nama_sekolah}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Jurusan</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->nama_sdm_jurusan}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Alamat</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->alamat}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Telepon</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->telp}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Email</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->email}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Gabung</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->mulai_kerja}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Berakhir</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->selesai_kerja}}</div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-1"><p><strong>Keterangan</p></strong></div>
                                                <div class="col-md-1"><p style="text-align: right">:</p></div>
                                                <div class="col-md-8">{{ $a->ket}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id="tab2" class="tab-pane fade" role="tabpanel">
                                        <div class="row ml-10">
                                            <div class="col-md-12">
                                                <h3 class="mb-10">Dokumen PSG dan Praktek</h3>
                                                <div class="col-md-12 mb-10"><a href=""><h5 class="text-primary"><span class="mr-10"><i class="fa fa-file"></i></span>Surat Peryataan</h5></a></div>
                                                <div class="col-md-12 mb-10"><a href=""><h5 class="text-primary"><span class="mr-10"><i class="fa fa-file"></i></span>Sertifikat PSG</h5></a></div>
                                                <div class="col-md-12 mb-10"><a href=""><h5 class="text-primary"><span class="mr-10"><i class="fa fa-file"></i></span>Nilai</h5></a></div>
                                                <div class="col-md-12 mb-10"><a href=""><h5 class="text-primary"><span class="mr-10"><i class="fa fa-file"></i></span>Profil AGEECOM</h5></a></div>
                                            </div>
                                            <div class="col-md-12">
                                                <h3 class="mb-10">Dokumen Karyawan</h3>
                                                <div class="col-md-12 mb-10"><a href=""><h5 class="text-primary"><span class="mr-10"><i class="fa fa-file"></i></span>ID Card</h5></a></div>
                                                <div class="col-md-12 mb-10"><a href=""><h5 class="text-primary"><span class="mr-10"><i class="fa fa-file"></i></span>Surat Perjanjian Kerja (SPK)</h5></a></div>
                                                <div class="col-md-12 mb-10"><a href=""><h5 class="text-primary"><span class="mr-10"><i class="fa fa-file"></i></span>Surat Tugas</h5></a></div>
                                                <div class="col-md-12 mb-10"><a href=""><h5 class="text-primary"><span class="mr-10"><i class="fa fa-file"></i></span>Surat Keterangan Kerja</h5></a></div>
                                                <div class="col-md-12 mb-10"><a href=""><h5 class="text-primary"><span class="mr-10"><i class="fa fa-file"></i></span>Surat Pengalaman Kerja</h5></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab3" class="tab-pane fade" role="tabpanel">
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
