@extends('template/page')
@section('content')
	<div class="container-fluid pt-25">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view" style="padding: 15px;">
                    <h5 style="text-align:center;">SDM Baru / Edit</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default card-view">
                    <div class="row">
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10">Kode SDM</label>
                            <input type="text" class="form-control" disabled="true" name="kd_karyawan" value="@if(isset($data->kd_karyawan)) {{$data->kd_karyawan}}@else {{old('kd_karyawan')}} @endif">
                        </div>
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10">Nama SDM</label>
                            <input type="text" class="form-control" name="nama" value="@if(isset($data->nama_karyawan)) {{$data->nama_karyawan}}@else {{old('nama_karyawan')}} @endif">
                        </div>
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10">Status Karyawan</label>
                            <select class="status" name="status">
                                    @isset($data)
                                    @if ($data == "")
                                        @foreach ($status as $a)
                                            <option value="{{$a->id_sdm_status}}">{{$a->nama_sdm_status}}</option>
                                        @endforeach
                                    @else
                                            <option value="{{$data->id_sdm_status}}" selected="true">{{$data->nama_sdm_status}}</option>
                                        @foreach ($status as $a)
                                            <option value="{{$a->id_sdm_status}}">{{$a->nama_sdm_status}}</option>
                                        @endforeach
                                    @endif
                                @endisset
                            </select>
                            <script>
                                $(document).ready(function() {
                                    $('.status').select2();
                                });
                            </script>
                        </div>
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="@if(isset($data->alamat)) {{$data->alamat}}@else {{old('alamat')}} @endif">
                        </div>
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10">Tempat Kelahiran</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="@if(isset($data->tempat_lahir)) {{$data->tempat_lahir}}@else {{old('tempat_lahir')}} @endif">
                        </div>
                        <div class="col-md-4 mb-20">
                            <label for="example-date-input" class="col-2 col-form-label mb-10">Tanggal Lahir</label>
                            <input name="tgl_lahir" class="form-control" type="date" value="@if(isset($data->tgl_lahir)) {{$data->tgl_lahir}}@else {{old('tgl_lahir')}} @endif" id="example-date-input">
                        </div>
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10">Telepon</label>
                            <input type="text" class="form-control" name="telp" value="@if(isset($data->telp)) {{$data->telp}}@else {{old('telp')}} @endif">
                        </div>
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10">Nama Wali / Pembimbing</label>
                            <input type="text" class="form-control" name="ket" value="@if(isset($data->ket)) {{$data->ket}}@else {{old('ket')}} @endif">
                        </div>
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10">Email</label>
                            <input type="text" class="form-control" name="email" value="@if(isset($data->email)) {{$data->email}}@else {{old('email')}} @endif">
                        </div>
                     
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10">No Identitas (KTP/Kartu Pelajar)</label>
                            <input type="text" class="form-control" name="ktp" value="@if(isset($data->ktp)) {{$data->ktp}}@else {{old('ktp')}} @endif">
                        </div>
                          <div class="col-md-4 mb-20">
                            <label class="control-label mb-10">Pendidikan</label>
                            <input type="text" class="form-control" name="pendidikan" value="@if(isset($data->pendidikan)) {{$data->pendidikan}}@else {{old('pendidikan')}} @endif">
                        </div>
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10">Nama Sekolah</label>
                            <select class="sekolah" name="sekolah">
                                    @isset($data)
                                    @if ($data == "")
                                        @foreach ($sekolah as $b)
                                            <option value="{{$b->id_sekolah}}">{{$b->nama_sekolah}}</option>
                                        @endforeach
                                    @else
                                            <option value="{{$data->id_sekolah}}" selected="true">{{$data->nama_sekolah}}</option>
                                        @foreach ($sekolah as $b)
                                            <option value="{{$b->id_sekolah}}">{{$b->nama_sekolah}}</option>
                                        @endforeach
                                    @endif
                                @endisset
                            </select>
                            <script>
                                $(document).ready(function() {
                                    $('.sekolah').select2();
                                });
                            </script>
                        </div>
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10">Jurusan</label>
                            <select class="jurusan" name="jurusan">
                                    @isset($data)
                                    @if ($data == "")
                                        @foreach ($jurusan as $c)
                                            <option value="{{$c->id_sdm_jurusan}}">{{$c->nama_sdm_jurusan}}</option>
                                        @endforeach
                                    @else
                                            <option value="{{$data->id_sdm_jurusan}}" selected="true">{{$data->nama_sdm_jurusan}}</option>
                                        @foreach ($jurusan as $c)
                                            <option value="{{$c->id_sdm_jurusan}}">{{$c->nama_sdm_jurusan}}</option>
                                        @endforeach
                                    @endif
                                @endisset
                            </select>
                            <script>
                                $(document).ready(function() {
                                    $('.jurusan').select2();
                                });
                            </script>
                        </div>
                        <div class="col-md-4 mb-20">
                            <label for="example-date-input" class="col-2 col-form-label mb-10">Mulai Kerja</label>
                            <input name="mulai_kerja" class="form-control" type="date" value="@if(isset($data->mulai_kerja)) {{$data->mulai_kerja}}@else {{old('mulai_kerja')}} @endif" id="example-date-input">
                        </div>
                        <div class="col-md-4 mb-20">
                            <label for="example-date-input" class="col-2 col-form-label mb-10">Selesai Kerja</label>
                            <input name="selesai_kerja" class="form-control" type="date" value="@if(isset($data->selesai_kerja)) {{$data->selesai_kerja}}@else {{old('selesai_kerja')}} @endif" id="example-date-input">
                        </div>
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10 text-left">Upload Foto Diri</label>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <span class="input-group-addon fileupload btn btn-primary btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span class="fileinput-exists btn-text">Change</span>
                                <input type="hidden"><input type="file" name="...">
                                </span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
                            </div>
                        </div>
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10 text-left">Upload Foto KTP</label>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <span class="input-group-addon fileupload btn btn-primary btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span class="fileinput-exists btn-text">Change</span>
                                <input type="hidden"><input type="file" name="...">
                                </span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
                            </div>
                        </div>
                        <div class="col-md-4 mb-20">
                            <label class="control-label mb-10 text-left">Upload Dokumen</label>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <span class="input-group-addon fileupload btn btn-primary btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select file</span> <span class="fileinput-exists btn-text">Change</span>
                                <input type="hidden"><input type="file" name="...">
                                </span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
                            </div>
                        </div>
                        <div class="col-md-12 mb-20">
                            <div class="button-list pull-right">
                                <button type="button" class="btn btn-primary btn-anim"><i class="fa fa-check"></i><span class="btn-text">Simpan Perubahan</span></button>
                                <button type="button" class="btn btn-danger btn-outline btn-anim"><i class="fa fa-times"></i><span class="btn-text">Batal</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection