<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "servis_pelanggan";
    protected $primaryKey = "id_pelanggan";
    protected $fillable = ["nama_pelanggan","alamat","no_ktp","no_sms","ket","id_kelompok","tgl_gabung","email_pelanggan","titik_google","ket_lain","id_jkel","id_agama","id_kerja","kd_pelanggan","acak","tgl_lahir"];
}
