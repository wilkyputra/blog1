<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Siswa;

class dosbing extends Model
{
    protected $table = 'dosbing';
    protected $fillable =['Nama_Dosen','Mata_Pelajaran','Alamat','Jabatan'];

    public $timestamps = false;

    public function siswa()
    {
    	return $this->hasMany('App\Siswa', 'dosbing_id', 'Nama_Dosen');
    }
}
