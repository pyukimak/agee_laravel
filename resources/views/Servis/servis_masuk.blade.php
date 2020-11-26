@extends('template/page')
@section('content')
<div class="container-fluid pt-25">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default card-view" style="padding: 15px;">
                <h5 style="text-align:center;">Halaman Servis Masuk</h5>
            </div>
        </div>
    </div>
    @foreach ($det as $a)
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default card-view  pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body  pa-0">
                            <div class="profile-box">
                                <div class="image">
                                    <img style="width: 100%; height: 100%; margin-top:0; margin-left:0; margin-right:0" src="{{ asset('uploads/'.$a->foto)}}" alt="Image description">
                                </div>
                                <div class="profile-info text-center">
                                    <h5 class="block mt-10 mb-5 weight-500 capitalize-font txt-danger">{{$a->nama_pelanggan}} [{{$a->kd_pelanggan}}]</h5>
                                    <h6 class="block capitalize-font pb-20">Telp / WA :{{$a->no_sms}}/{{$a->ket}}</h6>
                                </div>
                                <div class="social-info">
                                    <button class="btn btn-default btn-block btn-outline btn-anim mt-10" data-toggle="modal" data-target="#myModal"><i class="fa fa-tags"></i><span class="btn-text">Rekomendasi Biaya</span></button>
                                    <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title" id="myModalLabel">Rekomendasi Biaya</h5>
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
            <div class="col-md-4">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body sm-data-box-1">
                            <span class="uppercase-font weight-500 font-14 block text-center txt-dark">barang servis</span>	
                            <form action="">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Nomer Serial</label>
                                    <div class="col-md-8">
                                        <input type="text" placeholder="SN......" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Asal</label>
                                    <div class="col-md-8">
                                        <select class="asal" name="ktgr">
                                            <option value="1" selected="true">Servis Masuk</option>
                                            <option value="2">Kunjungan</option>
                                        </select>
                                        <script>
                                            $(document).ready(function() {
                                                $('.asal').select2();
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Kategori</label>
                                    <div class="col-md-8">
                                       <select class="kategori" name="ktgr">
                                            <option value="" selected="true">Cari Kategori</option>
                                            @foreach ($kategori as $k)
                                                <option value="{{$k->id_kategori}}">{{$k->nama_kategori}}</option>
                                            @endforeach
                                        </select>
                                        <script>
                                            $(document).ready(function() {
                                                $('.kategori').select2();
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Merk</label>
                                    <div class="col-md-8">
                                        <select class="merk" name="mrk">
                                            <option value="" selected="true">Cari Merk</option>
                                            @foreach ($merk as $k)
                                                <option value="{{$k->id_merk}}">{{$k->nama_merk}}</option>
                                            @endforeach
                                        </select>
                                        <script>
                                            $(document).ready(function() {
                                                $('.merk').select2();
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Type</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Ket Lain</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Kelengkapan</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Keluhan</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputuname_4" class="col-sm-4 control-label">Jadi berapa hari</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="exampleInputuname_4">
                                            <div class="input-group-addon">Hari</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Perkiraan Estimasi</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4">Kategori</label>
                                    <div class="col-md-8">
                                        <div class="col-md-6">
                                            <div class="radio radio-success">
                                                <input type="radio" name="radio" id="radio4" value="option4">
                                                <label for="radio4"> Ringan </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="radio radio-info">
                                                <input type="radio" name="radio" id="radio5" value="option5">
                                                <label for="radio5"> Berat </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body sm-data-box-1">
                            <span class="uppercase-font weight-500 font-14 block text-center txt-dark">Keterangan Teknisi</span>	
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                        <th>Nama Teknisi</th>
                                        <th>Proses</th>
                                        <th>Belum Diambil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teknisi as $t)
                                        <tr>
                                        <td>{{$t->nama_karyawan}}</td>
                                        <td><span class="label label-danger">0</span> </td>
                                        <td><span class="label label-danger">0</span> </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <hr class="light-grey-hr mb-10">
                            <div class="form-group">
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox_1" type="checkbox">
                                    <label for="checkbox_1">fee karyawan saat masih garansi</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="teknisi" name="teknisi">
                                    <option value="" selected="true">Pilih Teknisi</option>
                                    @foreach ($teknisi as $k)
                                        <option value="{{$k->id_karyawan}}">{{$k->nama_karyawan}}</option>
                                    @endforeach
                                </select>
                                <script>
                                    $(document).ready(function() {
                                        $('.teknisi').select2();
                                    });
                                </script>
                            </div>
                            <span class="uppercase-font weight-500 font-14 block text-center txt-dark">Ketentuan Admin</span>	
                            <table style="width: 100%;>
                                <tbody class="ml-20">
                                    <tr>
                                    <td style="width: 30%">Fee anda</td>
                                    <td><span>: admin</span> </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 30%">Kompensasi</td>
                                    <td><span>: admin</span> </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 30%">Deadline</td>
                                    <td><span>: admin</span> </td>
                                    </tr>
                                    <tr>
                                    <td style="width: 30%">Status</td>
                                    <td><span>: admin</span> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-anim btn-rounded btn-block mb-10"><i class="fa fa-shopping-cart"></i><span class="btn-text">Masukan Keranjang Servis</span></button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view" style="padding: 15px;">
                    <h6 style="text-align:center;">Histori : <span class="label label-info">0</span></h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="tab-struct custom-tab-1 product-desc-tab">
                                <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_7">
                                    <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="descri_tab" href="#descri_tab_detail"><span class="pull-left inline-block capitalize-font txt-dark">Servis</span><span class="label label-danger ml-10">25</span></a></li>
                                    <li role="presentation" class="next"><a data-toggle="tab" id="adi_info_tab" role="tab" href="#adi_info_tab_detail" aria-expanded="false"><span class="pull-left inline-block capitalize-font txt-dark">Kunjungan</span><span class="label label-success ml-10">25</span></a></li>
                                </ul>
                                <div class="tab-content" id="myTabContent_7">
                                    <div id="descri_tab_detail" class="tab-pane fade active in pt-0" role="tabpanel">
                                        <p class="pt-15">Activist, criteria planned giving dignity, committed democratizing the global financial system progressive. Nelson Mandela equal opportunity change accelerate pathway to a better life invest our ambitions catalyst. Making progress contribution compassion Ford Foundation, cross-agency coordination Bill and Melinda Gates development. Overcome injustice tackling activism, promising development equality hack meaningful working families. Foundation; open source; organization volunteer, replicable think tank carbon emissions reductions.</p>
                                    </div>
                                    <div id="adi_info_tab_detail" class="tab-pane pt-0 fade" role="tabpanel">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table  mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="border-none">SIZE</td>
                                                        <td class="border-none">31, 32, 33, 34, 35</td>
                                                    </tr>
                                                    <tr>
                                                        <td>COLOR</td>
                                                        <td>blue, red, rosa, white</td>
                                                    </tr>
                                                    <tr>
                                                        <td>TAGS</td>
                                                        <td>Diesel, shoe, stars</td>
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
    @endforeach
</div>
@endsection