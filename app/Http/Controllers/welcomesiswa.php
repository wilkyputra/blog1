<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class welcomesiswa extends Controller
{
   public function view (Request $request) {
		
    	 $user = Siswa::when($request->search, function ($query) use ($request) {
                $query->where('id', 'LIKE', "%{$request->search}%")
                      ->orWhere('Nama', 'LIKE', "%{$request->search}%")
                      ->orWhere('Alamat', 'LIKE', "%{$request->search}%")
                      ->orWhere('Jenis_Kelamin', 'LIKE', "%{$request->search}%")
                      ->orWhere('Jurusan', 'LIKE', "%{$request->search}%");
                })->paginate(5);
 
    	// mengirim data pegawai ke view index
    	return view('welcomesiswa',['user' => $user]);
    }
}
