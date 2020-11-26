<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "servis_pelanggan_lain";
    protected $primaryKey = "id_pelanggan";
    protected $fillable = ['nama_pelanggan','no_ktp','alamat','telp','ket_1','ket_2','ket_3'];
}
