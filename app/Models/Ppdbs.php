<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdbs extends Model
{
    use HasFactory;
    protected $fillable = [
        's_namalengkap',
        's_namapanggilan',
        's_jk',
        's_ttl',
        's_agama',
        's_ttinggal',
        's_sklhlama',
        's_tglterima',
        's_kls',
        'otl_nama',
        'otl_ttl',
        'otl_pendidikan',
        'otl_pekerjaan',
        'otl_agama',
        'otp_nama',
        'otp_ttl',
        'otp_pendidikan',
        'otp_pekerjaan',
        'otp_agama',
        'kode_daftar',
        'image_dokumen',

    ];
}
