@extends('template/page')
@section('content')
	<div class="container-fluid pt-25">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view" style="padding: 15px;">
					<div class="steins">
						<img class="img-responsive zero" src="{{asset('assets/template/dist/img/wow.png')}}" alt="Image description">
						<div class="gate">
							<div class="text">Event Hari Ini</div>
						</div>
					</div>
					<div class="ket" style="text-align: center; padding: 15px 130px;">
						<h2>Selamat Datang di Sistem Informasi Ageecomputer</h2>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae reprehenderit tenetur eos quo eligendi, deleniti rem impedit totam minus porro, distinctio, alias harum quibusdam. Hic alias dolorem error commodi rem.</p>
					</div>
				</div>
			</div>
			<button id="setting_panel_btn" class="btn btn-info btn-rounded btn-anim setting-panel-btn shadow-2dp"><i class="fa fa-location-arrow"></i><span class="btn-text">Halaman Saya</span></button>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="panel panel-default card-view pa-0">
					<div class="panel-wrapper collapse in">
						<div class="panel-body pa-0">
							<div class="sm-data-box bg-red">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light block counter"><span class="counter-anim">914,001</span></span>
											<span class="weight-500 uppercase-font txt-light block font-13">Costumers</span>
										</div>
										<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-male-female txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="panel panel-default card-view pa-0">
					<div class="panel-wrapper collapse in">
						<div class="panel-body pa-0">
							<div class="sm-data-box bg-yellow">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light block counter"><span class="counter-anim">46</span></span>
											<span class="weight-500 uppercase-font txt-light block">Status Servis</span>
										</div>
										<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-case txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="panel panel-default card-view pa-0">
					<div class="panel-wrapper collapse in">
						<div class="panel-body pa-0">
							<div class="sm-data-box bg-green">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light block counter"><span class="counter-anim">4,054,876</span></span>
											<span class="weight-500 uppercase-font txt-light block">Order Penjualan</span>
										</div>
										<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-shopping-cart txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
				<div class="panel panel-default card-view pa-0">
					<div class="panel-wrapper collapse in">
						<div class="panel-body pa-0">
							<div class="sm-data-box bg-blue">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
											<span class="txt-light block counter"><span class="counter-anim">46.43</span>%</span>
											<span class="weight-500 uppercase-font txt-light block">Order Project</span>
										</div>
										<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
											<i class="zmdi zmdi-devices txt-light data-right-rep-icon"></i>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view"style="padding: 15px;">
					<h5 style="text-align:center;">Event Terdekat</h5>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Ultah Karyawan</h6>
						</div>
						<div class="pull-right">
							<a href="#" class="pull-left inline-block mr-15">
								<i class="zmdi zmdi-plus"></i>
							</a>
							<a href="#" class="pull-left inline-block close-panel" data-effect="fadeOut">
								<i class="zmdi zmdi-close"></i>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Sunarno
								</span>
								<span class="label label-danger ml-10">25</span>
								<span class="label label-info pull-right">Hari Ini</span>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Sunarno
								</span>
								<span class="label label-danger ml-10">25</span>
								<span class="label label-success pull-right">12 Hari</span>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Sunarno
								</span>
								<span class="label label-danger ml-10">25</span>
								<span class="label label-success pull-right">12 Hari</span>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Sunarno
								</span>
								<span class="label label-danger ml-10">25</span>
								<span class="label label-success pull-right">12 Hari</span>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Sunarno
								</span>
								<span class="label label-danger ml-10">25</span>
								<span class="label label-success pull-right">12 Hari</span>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Ultah Pelanggan Hari Ini</h6>
						</div>
						<div class="pull-right">
							<a href="#" class="pull-left inline-block mr-15">
								<i class="zmdi zmdi-info"></i>
							</a>
							<a href="#" class="pull-left inline-block close-panel" data-effect="fadeOut">
								<i class="zmdi zmdi-close"></i>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Guru
								</span>
								<span class="label label-warning pull-right">23 Orang</span>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Pelajar
								</span>
								<span class="label label-warning pull-right">19 Orang</span>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									PNS
								</span>
								<span class="label label-warning pull-right">11 Orang</span>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Guru
								</span>
								<span class="label label-warning pull-right">6 Orang</span>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Lainya
								</span>
								<span class="label label-warning pull-right">2 Orang</span>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="panel panel-default card-view">
					<div class="panel-heading">
						<div class="pull-left">
							<h6 class="panel-title txt-dark">Event Kalender</h6>
						</div>
						<div class="pull-right">
							<a href="#" class="pull-left inline-block mr-15">
								<i class="zmdi zmdi-download"></i>
							</a>
							<a href="#" class="pull-left inline-block close-panel" data-effect="fadeOut">
								<i class="zmdi zmdi-close"></i>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Hari Listrik Nasional
								</span>
								<span class="label label-primary pull-right">Hari Ini</span>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Hari Listrik Nasional
								</span>
								<span class="label label-info pull-right">9 Hari</span>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Hari Listrik Nasional
								</span>
								<span class="label label-info pull-right">11 Hari</span>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Hari Listrik Nasional
								</span>
								<span class="label label-info pull-right">16 Hari</span>
								<div class="clearfix"></div>
								<hr class="light-grey-hr row mt-10 mb-10">
								<span class="pull-left inline-block capitalize-font txt-dark">
									Hari Listrik Nasional
								</span>
								<span class="label label-info pull-right">22 Hari</span>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		{{-- <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="calendar-wrap">
								<div id="calendar" class="fc">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
	</div>
@endsection
