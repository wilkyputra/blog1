<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'user';
    protected $fillable =['Nama','Alamat','Jenis_Kelamin','Jurusan'];

    public $timestamps = false;
}
