@extends('template/page')
@section('content')
@foreach ($det as $a)
    
    <div class="container-fluid pt-25">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="item-big">
                                    <img style="width: 450px; height: 260px; display:block; margin-top:55px; margin-left:auto; margin-right:auto;" src="{{$a->foto_barang == '' ? asset('uploads/285x355.jpg') : asset('uploads/small_'.$a->foto_barang)}}" class="img-responsive" alt="Image description">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="product-detail-wrap">
                                        <h3 class="mb-20 weight-500">{{ $a->nm_barang }}</h3>
                                        <div class="row mb-30">
                                            <div class="col-md-6">
                                                <p>Kode Barang	: {{ $a->kode }}</p>
                                                <p>Stok Tersedia	: {{ $a->stok_b}} {{ $a->nm_sat}}</p>
                                                <p>Merk : {{ $a->kode }}</p>
                                                <p>Kategori : {{ $a->kode }}</p>
                                                <p>Jenis Barang : {{ $a->kode }}</p>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <p>HPP Toko	: {{ $a->harga_beli_terkahir }}</p>
                                                <p>Harga Member 1 : {{ $a->h1 }}</p>
                                                <p>Harga Member 2 : {{ $a->h2 }}</p>
                                                <p>Harga Member 3 : {{ $a->h3 }}</p>
                                                <p>Harga Member 4 : {{ $a->h4 }}</p>
                                                <p>Harga Member 5 : {{ $a->h5 }}</p>
                                                <p>Harga Umum	: {{ $a->h_jual }}</p>
                                            </div>
                                        </div>
                                        <div class="btn-group mr-10">
                                            <button class="btn btn-success btn-anim"><i class="fa fa-map-marker"></i><span class="btn-text">Koordinasi</span></button>
                                        </div>
                                        <div class="btn-group mr-10">
                                            <button class="btn btn-success btn-anim"><i class="fa fa-edit"></i><span class="btn-text">Edit Pelanggan</span></button>
                                        </div>
                                        <div class="btn-group mr-10">
                                            <button class="btn btn-success btn-anim"><i class="fa fa-envelope"></i><span class="btn-text">Kirim Pesan</span></button>
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
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="tab-struct custom-tab-1 product-desc-tab">
                                <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_7">
                                    <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="descri_tab" href="#descri_tab_detail"><span class="pull-left inline-block capitalize-font txt-dark">Servis</span><span class="label label-danger ml-10">25</span></a></li>
                                    <li role="presentation" class="next"><a data-toggle="tab" id="adi_info_tab" role="tab" href="#adi_info_tab_detail" aria-expanded="false"><span class="pull-left inline-block capitalize-font txt-dark">Inden</span><span class="label label-success ml-10">25</span></a></li>
                                    <li role="presentation" class=""><a data-toggle="tab" id="review_tab" role="tab" href="#review_tab_detail" aria-expanded="false"><span class="pull-left inline-block capitalize-font txt-dark">PJ Manual</span><span class="label label-primary ml-10">25</span></a></li>
                                    <li role="presentation" class=""><a data-toggle="tab" id="review_tab" role="tab" href="#review_tab_detail" aria-expanded="false"><span class="pull-left inline-block capitalize-font txt-dark">SV Manual</span><span class="label label-warning ml-10">25</span></a></li>
                                    <div class="pull-right">
                                        <span class="pull-left inline-block capitalize-font txt-dark">
                                            Total Servis
                                        </span>
                                        <span class="label label-danger ml-10">25</span>
                                    </div>
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
                                    <div id="review_tab_detail" class="tab-pane pt-0 fade" role="tabpanel">
                                        <p class="muted review-tag pt-15">No reviews yet.</p>
                                        <div class="row mt-40">
                                            <div class="col-sm-6">
                                                <div class="form-wrap">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="control-label mb-10" for="review">Your rating</label>
                                                            <div class="product-rating starrr" id="star1"><a href="#" class="zmdi zmdi-star-outline"></a><a href="#" class="zmdi zmdi-star-outline"></a><a href="#" class="zmdi zmdi-star-outline"></a><a href="#" class="zmdi zmdi-star-outline"></a><a href="#" class="zmdi zmdi-star-outline"></a></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label mb-10" for="review">Your review</label>
                                                            <textarea class="form-control" id="review" placeholder="add review"></textarea>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="control-label mb-10" for="exampleInputuname_2">User Name</label>
                                                                    <input type="text" class="form-control" id="exampleInputuname_2" placeholder="Username">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
                                                                    <input type="email" class="form-control" id="exampleInputEmail_2" placeholder="Enter email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                            
                                                        <div class="form-group mb-0">
                                                            <button type="submit" class="btn btn-success  mr-10">Submit</button>
                                                        </div>
                                                    </form>
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
@endforeach

@endsection