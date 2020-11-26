@extends('template/page')
@section('content')
	<div class="container-fluid pt-25">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="panel panel-default card-view">
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">Data Pelanggan</h6>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div class="table-wrap">
									<div class="table-responsive">
										<div id="datable_1_wrapper" class="dataTables_wrapper">
											{{-- <div class="dataTables_length" id="datable_1_length">
												<label>Show 
													<select name="datable_1_length" aria-controls="datable_1" class="">
														<option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>
													</select> entries
												</label>
											</div> --}}
											<div id="datable_1_filter" class="dataTables_filter">
											<label>
												<form action="/pelanggan/carisemua" method="GET">
													<input type="search" name="cari" value="{{ old('cari') }}" class="" placeholder="cari...." aria-controls="datable_1">
												</form>
												<div class="button-list" style="padding-right: 10px">
													<a href="{{ url('/pelanggan/tambah') }}"><button class="btn btn-success btn-circle btn-sm">
														<i class="fa fa-plus"></i></button>
													</a>
													<a href="/pelanggan"><button class="btn btn-warning btn-circle btn-sm" type="button"><i class="fa fa-refresh"></i></button></a>
													<button class="btn btn-info btn-icon-anim btn-circle btn-sm" type="button" data-toggle="collapse" data-target="#serch" aria-expanded="true" aria-controls="serch"><i class="fa fa-chevron-down"></i></button>
												</div>
												
											</label>
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
																	<form action="/pelanggan/cari" method="POST">
																		@csrf
																		<div class="row">
																			<div class="form-group col-md-3">
																				<label class="control-label mb-10 text-left">Kode Pelanggan</label>
																				<input type="text" name="carikd" value="{{ old('carikd') }}" class="form-control" placeholder="">
																			</div>
																			<div class="form-group col-md-3" data-style="btn-primary btn-outline">
																				<label class="control-label mb-10 text-left">Nama</label>
																				<input type="text" name="carinm" value="{{ old('carinm') }}" class="form-control" placeholder="">
																			</div>
																			<div class="form-group col-md-3">
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
																			<div class="form-group col-md-3">
																				{{-- <div class="form-group col-md-6">
																					<label class="control-label mb-10 text-left">Tanggal Lahir</label>
																					<select class="form-control">
																						<option>1</option>
																						<option>2</option>
																						<option>3</option>	
																						<option>4</option>
																						<option>5</option>
																					</select>
																				</div>
																				<div class="form-group col-md-6">
																					<label class="control-label mb-10 text-left">Bulan Lahir</label>
																					<select class="form-control">
																						<option>Jan</option>
																						<option>Feb</option>
																						<option>Mar</option>	
																						<option>Apr</option>
																						<option>Mei</option>
																						<option>Jun</option>
																						<option>Jul</option>
																						<option>Agu</option>
																						<option>Sep</option>
																						<option>Okt</option>
																						<option>Nov</option>
																						<option>Des</option>
																					</select>
																				</div> --}}
																				<label class="control-label mb-10">jenis Kelamin</label>
																				<select class="jkel" name="cjke">
																					<option value="" selected="true">--Tidak Ada--</option>
																					@foreach ($jkel as $k)
																						<option value="{{$k->id_jkel}}">{{$k->nama_jkel}}</option>
																					@endforeach
																				</select>
																				<script>
																					$(document).ready(function() {
																						$('.jkel').select2();
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
																			<div class="form-group col-md-3">
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
																			<div class="form-group col-md-3">
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
																				{{-- <div class="form-group col-md-6">
																					<label class="control-label mb-10 text-left">Status WA</label>
																					<select class="form-control">
																						<option>1</option>
																						<option>2</option>
																						<option>3</option>	
																						<option>4</option>
																						<option>5</option>
																					</select>
																				</div> --}}
																			</div>
																		</div>
																		{{-- <div class="row">
																			<div class="col-sm-3">
																				@foreach ($kel as $k)
																				<div class="checkbox checkbox-primary">
																					<input id="{{$k->id_kelompok}}" type="checkbox" checked="">
																					<label for="{{$k->id_kelompok}}"> {{$k->nama_kelompok}}</label>
																				</div>
																				@endforeach
																			</div>
																		</div> --}}
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
										<table id="datable_1" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
											<thead>
												<tr role="row"><th tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" style="width:5%; text-align: center;">No</th><th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:5%; text-align: center;">Kode Pelanggan</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 15%; text-align: center;">NAMA</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 10%; text-align: center;">UMUR</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 20%; text-align: center;">ALAMAT</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 15%; text-align: center;">NOMOR</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 30%; text-align: center;">AKSI</th></tr>
											</thead>
											{{-- data-container="body" title="" data-toggle="popover"  data-original-title="{{ $aPel->nama_pelanggan }}" data-placement="top" --}}
											<tbody>
												<?php $no = 1; ?>
													
											  @foreach ($data as $aPel)
												<tr role="row" class="odd">
													
													<input type="hidden" name="id_pelanggan" value="{{$aPel->id_pelanggan}}">
													<td style="text-align: center;">{{ $no }}</td>
													<td style="text-align: center;">{{ $aPel->kd_pelanggan }}</td>
													<td style="text-align: center;"><strong><a tabindex="0" class="ilang dowu" rel="popover" data-original-title="{{ $aPel->nama_pelanggan }}" data-img="{{'uploads/'.$aPel->foto}}" >{{ $aPel->nama_pelanggan}}</a><strong></td>
													<td style="text-align: center;">{{ $aPel->umur }} tahun</td>
													<td style="text-align: center;"><a tabindex="0" class="ilang dowu" role="button" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="{{ $aPel->alamat }}">{{ $aPel->alamat }}</a></td>
													<td style="text-align: center;"><a tabindex="0" class="ilang" role="button" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Telp:{{ $aPel->no_sms }} WA:{{ $aPel->ket }}">{{ $aPel->ket }}</a></td>
													<td style="text-align: center; padding: 0px;">
														<div class="button-list">
															<div class="btn-group">
																<div class="dropdown">
																	<button aria-expanded="false" data-toggle="dropdown" class="btn btn-success btn-xs dropdown-toggle " type="button"><i class="zmdi zmdi-settings"></i></button>
																	<ul role="menu" class="dropdown-menu">
																		<form role="form" method="POST" action="{{ url('servis/masuk/'.$aPel->id_pelanggan)}}" enctype="multipart/form-data">
																			@csrf
																			<input type="hidden" name="id_pelanggan" value="{{$aPel->id_pelanggan}}">
																			<li style="margin-left: 13px; margin-top: 3px; margin-bottom:3px;"><button style="background:none; border:none; cursor: pointer; color:black;" type="submit">Servis</button></li>
																		</form>
																		<li><a href="#">Kunjungan</a></li>
																		<li><a href="#">Indent</a></li>
																		<li><a href="#">Jual Langsung</a></li>
																		<li><a href="#">Rencana Jual barang</a></li>
																	</ul>
																</div>
															</div>
															<div class="btn-group">
																<div class="dropdown">
																	<button aria-expanded="false" data-toggle="dropdown" class="btn btn-danger btn-xs dropdown-toggle " type="button"><i class="zmdi zmdi-store"></i></button>
																	<ul role="menu" class="dropdown-menu">
																		<li><a href="#">CASH</a></li>
																		<li><a href="#">Kredit</a></li>
																		<li><a href="#">Nota Manual</a></li>
																		<li><a href="#">Kwitansi</a></li>
																		<li><a href="#">Tanda Terima</a></li>
																	</ul>
																</div>
															</div>
															<div class="btn-group">
																<div class="dropdown">
																	<button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle " type="button"><i class="zmdi zmdi-account"></i></button>
																	<ul role="menu" class="dropdown-menu">
																		<form role="form" method="POST" action="{{ url('pelanggan/detail/'.$aPel->id_pelanggan)}}" enctype="multipart/form-data">
																			@csrf
																			<input type="hidden" name="id_pelanggan" value="{{$aPel->id_pelanggan}}">
																			<li style="margin-left: 13px; margin-top: 3px; margin-bottom:3px;"><button style="background:none; border:none; cursor: pointer; color:black;" type="submit">Lihat Detail</button></li>
																		</form>
																		<li><a href="#">Kartu Pelanggan</a></li>
																		<li><a href="#">Kartu Ucapan</a></li>
																		<li><a href="#">Kirim SMS</a></li>
																		<li><a href="#">kirim WhatsApp</a></li>
																	</ul>
																</div>
															</div>
															<div class="btn-group">
																<a href="{{ url('pelanggan/edit/'.$aPel->id_pelanggan) }}"><i class="wryyy fa fa-pencil"></i></a>
															</div>
															<div class="btn-group"> 
																<a href="{{ url('pelanggan/hapus/'.$aPel->id_pelanggan) }}"><i class="wryyy fa fa-trash"></i></a>
															</div>
														</div>
													</td>
													<?php $no++; ?>
												</tr>
											@endforeach
											</tbody>
										</table>
										
										<div class="dataTables_info" id="datable_1_info" role="status" aria-live="polite">Total Data : {{$total}}</div>
										<div class="dataTables_paginate paging_simple_numbers" id="datable_1_paginate">
											{!! $data->appends(['sort' => 'votes'])->links() !!}
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