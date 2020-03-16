<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dosbing;

class Siswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable =['Nama','Alamat','Jenis_Kelamin','Jurusan','image'];

    public $timestamps = false;

    public function dosbing()
    {
    	return $this->hasMany('App\Dosbing', 'Nama_Dosen', 'dosbing_id');
    }
}
