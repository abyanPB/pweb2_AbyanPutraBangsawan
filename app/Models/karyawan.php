<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_petugas','jenis_kelamin','jabatan','alamat','no_hp', 'email'];

    protected $table = 'karyawan';

    protected $primaryKey = 'id_karyawan';

    public $timestamps = false;
}
