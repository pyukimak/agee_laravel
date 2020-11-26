@extends('template/page')
@section('csrf')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div class="container-fluid pt-25">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Data Pelanggan</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="form-wrap">
                             @isset($data)
                                @if ($data == "")
                                    <form id="verif">
                                        <div class="col-md-12 mb-20" >
                                        <input type="text" style="width: 50%; display: block; margin-left:auto; margin-right:auto;" class="form-control" name="telp-verif" placeholder="Ketikkan Nomer">
                                        </div>
                                        <div class="col-md-12 mb-20" >
                                            <input type="submit" class="btn btn-primary" style="display: block; margin-left:auto; margin-right:auto;" value="Cari">
                                        </div>
                                    </form>
                                @else
                                <div class="col-md-12 mb-20">
                                    <a href="{{ url('/pelanggan/tambah') }}" class="btn btn-primary pull-right" >Ke Halaman Tambah Pelanggan Baru</a>
                                </div> 
                                @endif
                            @endisset
                            
                            <div>
                                <table id="table_pelanggan" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">
                                    
                                </table>
                            </div>
                            <div id="ketok" style="display: none">
                                <a id="ex_tambah_baru" class="btn btn-primary pull-right" >Tambahkan Pelanggan Baru Mengunakan Nomer Ini</a>
                            </div>
                           <form class="form-horizontal form-material" id="add" action="{{url('/pelanggan/simpan/'.$id)}}" enctype="multipart/form-data" method="post" @if($data<>'') @else style="display:none;" @endif>
                            @csrf
                                    <div class="form-group"><div class="row">
                                        <div class="col-md-12 mt-10 mb-20">
                                                @if(isset($data->foto))
                                                <img id="thumb" src="{{ asset('uploads/'.$data->foto)}}" alt="" style="width: 500px; height: 250px; display: block; margin-left:auto; margin-right:auto;object-fit:cover">
                                                @else
                                                <img id="thumb" src="{{ asset('uploads/noimg.png')}}" alt="" style="width: 500px; height: 250px; display: block; margin-left:auto; margin-right:auto;object-fit:cover">
                                                @endif
                                                <input type="file" name="foto" id="foto" style="display:none">
                                                <input type="hidden" name="old_foto" value="@if(isset($data->foto)){{$data->foto}}@endif">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-right: 15px; margin-left: 15px;">
                                        <div class="col-md-4 mb-20">
                                            <label class="control-label mb-10">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="" @if(isset($data->nama_pelanggan)) value="{{$data->nama_pelanggan}}" @else value="" @endif  required>
                                            <input type="hidden" class="form-control" name="id_pelanggan" value="@if(isset($data->id_pelanggan)) {{$data->id_pelanggan}}@else {{old('id_pelanggan')}} @endif">
                                        </div>
                                        <div class="col-md-4 mb-20">
                                            <label class="control-label mb-10">No KTP</label>
                                            <input type="text" class="form-control" name="ktp" value="@if(isset($data->no_ktp)) {{$data->no_ktp}}@else {{old('no_ktp')}} @endif">
                                        </div>
                                        <div class="col-md-4 mb-20" >
                                            <label class="control-label mb-10">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" value="@if(isset($data->alamat)) {{$data->alamat}}@else {{old('alamat')}} @endif">
                                        </div>
                                        <div class="col-md-4 mb-20">
                                            <label class="control-label mb-10">Kelompok</label>
                                            <select class="kelompok" name="kel">
                                                    @isset($data)
                                                    @if ($data == "")
                                                        @foreach ($kel as $k)
                                                            <option value="{{$k->id_kelompok}}">{{$k->nama_kelompok}}</option>
                                                        @endforeach
                                                    @else
                                                            <option value="{{$data->id_kelompok}}" selected="true">{{$data->nama_kelompok}}</option>
                                                        @foreach ($kel as $k)
                                                            <option value="{{$k->id_kelompok}}">{{$k->nama_kelompok}}</option>
                                                        @endforeach
                                                    @endif
                                                @endisset
                                            </select>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $('.kelompok').select2();
                                            });
                                        </script>
                                        <div class="col-md-4 mb-20">
                                            <label class="control-label mb-10">Email</label>
                                            <input type="text" class="form-control" name="email" value="@if(isset($data->email_pelanggan)) {{$data->email_pelanggan}}@else {{old('email_pelanggan')}} @endif">
                                        </div>
                                         <div class="col-md-4 mb-20">
                                            <label class="control-label mb-10">Jenis Kelamin</label>
                                            <select class="klmn" name="jkel">
                                                @isset($data)
                                                    @if ($data == "")
                                                        @foreach ($jkel as $j)
                                                            <option value="{{$j->id_jkel}}">{{$j->nama_jkel}}</option>
                                                        @endforeach
                                                    @else
                                                            <option value="{{$data->id_jkel}}" selected="true">{{$data->nama_jkel}}</option>
                                                        @foreach ($jkel as $j)
                                                            <option value="{{$j->id_jkel}}">{{$j->nama_jkel}}</option>
                                                        @endforeach
                                                    @endif
                                                @endisset
                                            </select>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $('.klmn').select2();
                                            });
                                        </script>
                                         <div class="col-md-4 mb-20" id="telp_pelanggan">
                                             @isset($data)
                                             @if ($data == "")
                                             {{-- <input type="text" class="form-control" name="telp" value="" readonly> --}}
                                             @else
                                                        <label class="control-label mb-10">No Telp</label>
                                                        <input type="text" class="form-control" name="telp" value="{{$data->no_sms}}">
                                                    @endif
                                                @endisset
                                        </div>
                                        <div class="col-md-4 mb-20">
                                            <label class="control-label mb-10">Koordinat</label>
                                            <input type="text" class="form-control" name="koor" value="@if(isset($data->titik_google)) {{$data->titik_google}}@else {{old('titik_google')}} @endif">
                                        </div>
                                        <div class="col-md-4 mb-20">
                                            <label class="control-label mb-10">ket Lain</label>
                                            <input type="text" class="form-control" name="lain" value="@if(isset($data->ket_lain)) {{$data->ket_lain}}@else {{old('ket_lain')}} @endif">
                                        </div>
                                        <div class="col-md-4 mb-20">
                                            <label class="control-label mb-10">No WA</label>
                                            <input type="text" class="form-control" name="wa" value="@if(isset($data->ket)) {{$data->ket}}@else {{old('ket')}} @endif">
                                        </div>
                                        <div class="col-md-4 mb-20">
                                            <label class="control-label mb-10">Agama</label>
                                            <select class="agama" name="agama">
                                                    @isset($data)
                                                    @if ($data == "")
                                                            @foreach ($agama as $a)
                                                            <option value="{{$a->id_agama}}">{{$a->nama_agama}}</option>
                                                        @endforeach
                                                    @else
                                                            <option value="{{$data->id_agama}}" selected="true">{{$data->nama_agama}}</option>
                                                            @foreach ($agama as $a)
                                                            <option value="{{$a->id_agama}}">{{$a->nama_agama}}</option>
                                                        @endforeach
                                                    @endif
                                                @endisset
                                            </select>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $('.agama').select2();
                                            });
                                        </script>
                                        <div class="col-md-4 mb-20">
                                            <label class="control-label mb-10">Pekerjaan</label>
                                            <select class="pekerjaan-pelanggan" name="pekerjaan">
                                                @isset($data)
                                                    @if ($data == "")
                                                        @foreach ($kerja as $k)
                                                            <option value="{{$k->id_kerja}}">{{$k->nama_kerja}}</option>
                                                        @endforeach
                                                    @else
                                                            <option value="{{$data->id_kerja}}" selected="true">{{$data->nama_kerja}}</option>
                                                            @foreach ($kerja as $k)
                                                            <option value="{{$k->id_kerja}}">{{$k->nama_kerja}}</option>
                                                            @endforeach
                                                    @endif
                                                @endisset
                                                
                                            </select>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $('.pekerjaan-pelanggan').select2();
                                            });
                                        </script>
                                    </div>
                                    <div class="row" style="margin-right: 15px; margin-left: 15px;">
                                        <div class="col-md-4 mb-20">
                                            <label for="example-date-input" class="col-2 col-form-label">Tanggal Lahir</label>
                                            @php
                                                $i = 1;
                                                $j = 1;
                                                $k = date('Y');
                                            @endphp
                                            <table>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" name="tanggal" id="exampleFormControlSelect1">
                                                            @isset($tgl_lahir)
                                                                @if ($tgl_lahir <> '')
                                                                    <option value="{{$tgl_lahir}}" selected>{{$tgl_lahir}}</option>
                                                                @else
                                                                    <option value="{{date('d')}}" selected>{{date('d')}}</option>
                                                                @endif
                                                            @endisset
                                                            @for ($i; $i < 32; $i++)
                                                                <option value="{{$i}}" {{!isset($tgl_lahir) && $tgl_lahir == $i ? 'Selected' : ''}}>{{$i}}</option>
                                                            @endfor
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="bulan" id="exampleFormControlSelect1">
                                                            @isset($bln_lahir)
                                                                @if ($bln_lahir <> '')
                                                                    <option value="{{$bln_lahir}}" selected>{{$bln_lahir}}</option>
                                                                @else
                                                                    <option value="{{date('m')}}" selected>{{date('m')}}</option>
                                                                @endif
                                                            @endisset
                                                            @for ($j; $j < 13; $j++)
                                                                <option value="{{$j}}" {{!isset($bln_lahir) && $bln_lahir == $j ? 'selected' : ''}}>{{$j}}</option>
                                                            @endfor
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="tahun" id="exampleFormControlSelect1">
                                                            @isset($thn_lahir)
                                                                @if ($thn_lahir <> '')
                                                                    <option value="{{$thn_lahir}}" selected>{{$thn_lahir}}</option>
                                                                @else
                                                                    <option value="{{date('Y')}}" selected>{{date('Y')}}</option>
                                                                @endif
                                                            @endisset
                                                            @for ($k; $k > 1930; $k--)
                                                                <option value="{{$k}}" {{!isset($thn_lahir) && $thn_lahir == $k ? 'selected' : ''}}>{{$k}}</option>
                                                            @endfor
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-4 mb-20"  style="display:none;" @if($kel->id_kelompok = '3') style="display:block;" @else @endif>
                                            <label class="control-label mb-10">NPWP</label>
                                            <input type="text" class="form-control" name="npwp" value="@if(isset($data->npwp)) {{$data->npwp}}@else {{old('npwp')}} @endif">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-right: 15px; margin-left: 15px;">
                                       
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info waves-effect">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    function clear(){
        $(':input','#add')
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .removeAttr('checked')
        .removeAttr('selected');
    }

    var vForm = $('#verif')

    vForm.on("submit",function(event){
        event.preventDefault()
        var html = '';
        var i;
        var telp = $('input[name="telp-verif"]').val();
        var url  = '{{ url("pelanggan/edit")}}';
        $.ajax({
            url      : "/pelanggan/verify",
            type     : "POST",
            data     : {telp:telp,_token: "{{ csrf_token() }}"},
            dataType : "JSON",
            success: function(data){
                console.log(data);
                // $('#tabel-pelanggan').show()
                if(data.length > 0){
                        
                        
                        html +=  '<table id="table_pelanggan" class="table table-hover display  pb-30 dataTable" role="grid" aria-describedby="datable_1_info">'
                        html += '<thead><tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width:5%; text-align: center;">Kode Pelanggan</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20%; text-align: center;">NAMA</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 10%; text-align: center;">UMUR</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 40%; text-align: center;">ALAMAT</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 15%; text-align: center;">TELP/WA</th><th class="sorting" tabindex="0" aria-controls="datable_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 10%; text-align: center;">AKSI</th></tr></thead>'
                    for(i in data){
                        html += '<tbody>'
                        html += '<tr role="row" class="odd">'
                        html += '<td style="text-align: center;">'+data[i].kd_pelanggan+'</td>'
                        html += '<td style="text-align: center;">'+data[i].nama_pelanggan+'</td>'
                        html += '<td style="text-align: center;">'+data[i].tgl_lahir+'</td>'
                        html += '<td style="text-align: center;">'+data[i].alamat+'</td>'
                        html += '<td style="text-align: center;">'+data[i].ket+'/'+data[i].id_pelanggan+'</td>'
                        html += '<td style="text-align: center;"><a href="'+url+'/'+data[i].id_pelanggan+'"><i class="wryyy fa fa-pencil"></i></a><i class="wryyy fa fa-trash"></i></td>'

                        html += '</tr>'
                        html += '</tbody>'
                    }
                         
                        
                    $('#add').hide(1000)
                    $('#table_pelanggan').html(html).show(1000)
                    $('#ketok').show()
                    $("#ex_tambah_baru").attr("onClick","tambahBaru('"+data[0].ket+"')")
                }else{
                    clear()
                    // $('input[name="telp"]').val(telp)
                    html += '<label class="control-label mb-10">No Telp</label>'
                    html += '<input type="text" class="form-control" name="telp" value="'+telp+'" readonly>'
                    $('#telp_pelanggan').html(html)
                    $('#add').show(1000)
                    $('#table_pelanggan').hide(1000)
                     $('#ketok').hide(1000)
                }
            },
            error:function(err){
                console.log(err);
            }
        })
    });
    $("#thumb").on('click',function(){
    $("#foto").click();
    })
    //ketika file input change
    $("#foto").change(function(){
        setImage(this,"#thumb");
    })
    //read image
    function setImage(input,target){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            //menganti src dari object img#avatar
            reader.onload=function(e){
                $(target).attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function tambahBaru(notelp){
        var html = '';
        $("#table_pelanggan").hide(1000);
        $("#ex_tambah_baru").hide(1000);
        $("#add").show(1000);
        html += '<label class="control-label mb-10">No Telp</label>'
        html += '<input type="text" class="form-control" name="telp" value="'+telp+'" readonly>'
        $('#telp_pelanggan').html(html)
        
    }
</script>
@endsection