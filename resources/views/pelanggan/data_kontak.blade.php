@extends('template/page')
@section('content')
	<div class="container-fluid pt-25">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default card-view pa-0">
						<div class="panel-wrapper collapse in">
							<div class="panel-body pa-0">
								<div class="contact-list">
									<div class="row">
										<aside class="col-lg-2 col-md-4 pr-0">
											<div class="mt-20 mb-20 ml-15 mr-15">
												<a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-danger btn-block">
												Add new contact
												</a>
												<!-- Modal -->
												<div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																<h4 class="modal-title" id="myModalLabel">Add New Contact</h4>
															</div>
															<div class="modal-body">
																<form class="form-horizontal form-material" action="/kontak/tambah" method="post">
																	@csrf
																	<div class="form-group">
																		<div class="col-md-12 mb-20">
																			<input type="text" class="form-control" name="nama" placeholder="Nama">
																			<input type="hidden" class="form-control" name="id_pelanggan">
																		</div>
																		<div class="col-md-12 mb-20">
																			<input type="text" class="form-control" name="ktp" placeholder="No KTP">
																		</div>
																		<div class="col-md-12 mb-20">
																			<input type="text" class="form-control" name="alamat" placeholder="Alamat">
																		</div>
																		<div class="col-md-12 mb-20">
																			<input type="text" class="form-control" name="telp" placeholder="No telp">
																		</div>
																		<div class="col-md-12 mb-20">
																			<textarea class="form-control" rows="3" name="ket1" placeholder="Ket 1"></textarea>
																		</div>
																		<div class="col-md-12 mb-20">
																			<textarea class="form-control" rows="3" name="ket2" placeholder="Ket 2"></textarea>
																		</div>
																		<div class="col-md-12 mb-20">
																			<textarea class="form-control" rows="3" name="ket3" placeholder="Ket 3"></textarea>
																		</div>
																	</div>
																	<button type="submit" class="btn btn-info waves-effect">Save</button>
																</form>
															</div>
														</div>
														<!-- /.modal-content -->
													</div>
													<!-- /.modal-dialog -->
												</div>
												<!-- /.modal -->
											</div>
											<div class="nicescroll-bar" style="max-height: 570px; overflow:hidden;">
												<ul class="inbox-nav mb-30">
													@foreach ($kel as $a)
													<li>
														<a href="#">{{$a->nama_kelompok}}<span class="label label-primary ml-10">0</span></a>
													</li>
													@endforeach
												</ul>
											</div>
											<a class="txt-success create-label  pa-15" href="javascript:void(0)" data-toggle="modal" data-target="#myModal_1">+ Create New Label</a>
											<div id="myModal_1" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
															<h5 class="modal-title" id="myModalLabel">Add Lable</h5>
														</div>
														<div class="modal-body">
															<form>
																<div class="form-group">
																	<label class="control-label mb-10">Name of Label</label>
																	<input type="text" class="form-control" placeholder="Type name">
																</div>
																<div class="form-group">
																	<label class="control-label mb-10">Select Number of people</label>
																	<select class="form-control">
																		<option>All Contacts</option>
																		<option>10</option>
																		<option>20</option>
																		<option>30</option>
																		<option>40</option>
																		<option>Custom</option>
																	</select>
																</div>
															</form>
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
										</aside>
										
										<aside class="col-lg-10 col-md-8 pl-0">
											<div class="panel pa-0">
											<div class="panel-wrapper collapse in">
											<div class="panel-body  pa-0">
												<div class="table-responsive mb-30">
													<div id="datable_1_wrapper" class="dataTables_wrapper no-footer">
														<div class="dataTables_length" id="datable_1_length">
															<label>Show <select name="datable_1_length" aria-controls="datable_1" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries
															</label>
														</div>
														<div id="datable_1_filter" class="dataTables_filter">
															<form action="/kontak/carisemua" method="GET">
																<input type="search" name="cari" value="{{ old('cari') }}" class="" placeholder="cari...." aria-controls="datable_1">
															</form>
															<div class="button-list" style="padding-right: 10px">
																<button class="btn btn-success btn-circle btn-sm"><i class="fa fa-plus"></i></button>
																<a href="/kontak"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
																<button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-chevron-down"></i></button>
															</div>
														</div>
														<div class="col-md-12">
															<div class="collapse" id="serch" aria-expanded="true" style="">
																<div class="well">
																	<div class="panel panel-default card-view">
																		<div class="panel-heading">
																			<div class="pull-left">
																				<h6 class="panel-title txt-dark">Pencarian Lanjutan</h6>
																			</div>
																			<div class="clearfix"></div>
																		</div>
																		<div class="panel-wrapper collapse in">
																			<div class="panel-body">
																				<div class="form-wrap">
																					<form action="/kontak/cari" method="POST">
																						@csrf
																						<div class="row">
																							<div class="form-group col-md-3">
																								<label class="control-label mb-10 text-left">Id Pelanggan</label>
																								<input type="text" name="cariid" value="{{ old('cariid') }}" class="form-control" placeholder="">
																							</div>
																							<div class="form-group col-md-3" data-style="btn-primary btn-outline">
																								<label class="control-label mb-10 text-left">Nama</label>
																								<input type="text" name="carinm" value="{{ old('carinm') }}" class="form-control" placeholder="">
																							</div>
																							<div class="col-md-3 mb-20">
																								<label class="control-label mb-10">Kelompok</label>
																								<select class="kelompok" name="ckel">
																									<option value="" selected="true">--Tidak Ada--</option>
																									@foreach ($kel as $k)
																										<option value="{{$k->id_kelompok}}">{{$k->nama_kelompok}}</option>
																									@endforeach
																								</select>
																								<script>
																									$(document).ready(function() {
																										$('.kelompok').select2();
																									});
																								</script>
																							</div>
																							<div class="col-md-3 mb-20">
																								<label class="control-label mb-10">Jenis Kelamin</label>
																								<select class="klmn" name="cjke">
																									<option value="" selected="true">--Tidak Ada--</option>
																									@foreach ($jkel as $k)
																										<option value="{{$k->id_jkel}}">{{$k->nama_jkel}}</option>
																									@endforeach
																								</select>
																								<script>
																									$(document).ready(function() {
																										$('.klmn').select2();
																									});
																								</script>
																							</div>
																						</div>
																						<div class="row">
																							<div class="form-group col-md-3">
																								<label class="control-label mb-10 text-left">No KTP</label>
																								<input type="text" class="form-control" name="carink" value="{{ old('carink') }}" placeholder="">
																							</div>
																							<div class="form-group col-md-3">
																								<label class="control-label mb-10 text-left">No Telepon</label>
																								<input type="text" class="form-control" name="carint" value="{{ old('carint') }}" placeholder="">
																							</div>
																							<div class="col-md-3 mb-20">
																								<label class="control-label mb-10">Agama</label>
																								<select class="agama" name="caga">
																									<option value="" selected="true">--Tidak Ada--</option>
																									@foreach ($agama as $k)
																										<option value="{{$k->id_agama}}">{{$k->nama_agama}}</option>
																									@endforeach
																								</select>
																								<script>
																									$(document).ready(function() {
																										$('.agama').select2();
																									});
																								</script>
																							</div>
																							<div class="col-md-3 mb-20">
																								<label class="control-label mb-10">Pekerjaan</label>
																								<select class="kerja" name="cker">
																									<option value="" selected="true">--Tidak Ada--</option>
																									@foreach ($kerja as $k)
																										<option value="{{$k->id_kerja}}">{{$k->nama_kerja}}</option>
																									@endforeach
																								</select>
																								<script>
																									$(document).ready(function() {
																										$('.kerja').select2();
																									});
																								</script>
																							</div>
																						</div>
																						<div class="form-group"> 
																							<div class="pull-right">
																								<button type="submit" class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Cari</span></button>
																							</div>
																						</div>
																					</form>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<table id="datable_1" class="table  display table-hover mb-10 dataTable no-footer" data-page-size="10" role="grid" aria-describedby="datable_1_info">
															<thead>
																<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 36px; text-align: center;">No</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 147px; text-align: center;">Nama</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 213px; text-align: center;">Keterangan</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 131px; text-align: center;">Alamat</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 106px; text-align: center;">No Telp</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 282px; text-align: center;">Action</th></tr>
															</thead>
															<tbody>
																<?php $no = 1; ?>
															@foreach ($data as $aKon)
																<tr role="row" class="odd">
																	<td style="text-align: center;">{{ $no }}</td>
																<td style="text-align: center;"><a tabindex="0" class="ilang dowu" rel="popover" data-original-title="{{ $aKon->nama_pelanggan }}" data-content="NO KTP = {{ $aKon->no_ktp }}">{{ $aKon->nama_pelanggan}}<span class="label label-danger ml-10">{{$aKon->umur}}</span></a></td>
																	<td style="text-align: center;"><a tabindex="0" class="ilang dowu2" role="button" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{ $aKon->ket_1 }}">{{ $aKon->ket_1 }}</a></td>
																	<td style="text-align: center;"><a tabindex="0" class="ilang dowu2" role="button" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{ $aKon->alamat }}">{{ $aKon->alamat }}</a></td>
																	<td style="text-align: center;">{{ $aKon->telp }}</td>
																	<td style="padding: 0px;">
																		<div class="button-list">
																			<div class="btn-group">
																				<button aria-expanded="false" class="btn btn-success btn-xs dropdown-toggle " type="button"><i class="zmdi zmdi-whatsapp"></i></button>
																			</div>
																			<div class="btn-group">
																				<div class="dropdown">
																					<button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle " type="button"><i class="zmdi zmdi-account"></i></button>
																					<ul role="menu" class="dropdown-menu">
																						<li><a href="#">Kartu Pelanggan</a></li>
																						<li><a href="#">Kartu Ucapan</a></li>
																						<li><a href="#">Kirim SMS</a></li>
																						<li><a href="#">kirim WhatsApp</a></li>
																					</ul>
																				</div>
																			</div>
																			<div class="btn-group">
																				<a onclick="edit({{$aKon->id_pelanggan}})"><i class="wryyy fa fa-pencil"></i></a>
																			</div>
																			<div class="btn-group"> 
																				<a href="{{ url('kontak/hapus/'.$aKon->id_pelanggan) }}"><i class="wryyy fa fa-trash"></i></a>
																			</div>
																		</div>
																	</td>
																	<?php $no++; ?>
																</tr>
															@endforeach
															</tbody>
														</table>
													<div class="dataTables_info" id="datable_1_info" role="status" aria-live="polite">Total Data: {{$total}}
													</div>
													<div class="dataTables_paginate paging_simple_numbers" id="datable_1_paginate">
														{!! $data->appends(['sort' => 'votes'])->links() !!}
													</div>
												</div>
											</div>
											</div>
											</div>
										</aside>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script>
		function edit(id){
			$.ajax({
				url      : '/kontak/edit',
				method   : 'POST',
				dataType : 'JSON',
				data     : {id : id, _token : '{{csrf_token()}}'},
				success:function(ok){
					console.log(ok);
					$("#myModal").modal('show')
					$('input[name="nama"]').val(ok.nama_pelanggan)
					$('input[name="id_pelanggan"]').val(ok.id_pelanggan)
					$('input[name="ktp"]').val(ok.no_ktp)
					$('input[name="alamat"]').val(ok.alamat)
					$('input[name="telp"]').val(ok.telp)
					$('textarea[name="ket1"]').val(ok.ket_1)
					$('textarea[name="ket2"]').val(ok.ket_2)
					$('textarea[name="ket3"]').val(ok.ket_3)
				},
				error:function(ko){
					console.log(ko);
				}
			})
		}
	</script>
@endsection