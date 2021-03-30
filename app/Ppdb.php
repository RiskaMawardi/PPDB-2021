<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    protected $fillable = [
    'nis','nama','jenis_kelamin','tempat_lahir','tanggal_lahir','alamat','asal_sekolah','kelas','jurusan'
    ];
}
