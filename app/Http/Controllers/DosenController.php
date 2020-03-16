<?php

namespace App\Http\Controllers;

use App\Dosbing;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function view (Request $request) {
		

 		$dosbing = Dosbing::all();
    	// mengirim data pegawai ke view index
    	return view('welcomesiswa',['dosbing' => $dosbing]);
		// return response()->json($user);
    }

    public function inputdata()
	{
 
		// memanggil view tambah
		return view('inputDosbing');
 
	}
 
	
	public function store(Request $request)
    {
        $this->validate($request,[
            'Nama_Dosen' => 'required',
            'Mata_Pelajaran' => 'required',
            'Alamat' => 'required',
            'Jabatan' => 'required'
        ]);
 
           $dosbing = new Dosbing;
           $dosbing->Nama_Dosen = $request->Nama_Dosen;
           $dosbing->Mata_Pelajaran = $request->Mata_Pelajaran;
           $dosbing->Alamat = $request->Alamat;
           $dosbing->Jabatan = $request->Jabatan;
           $dosbing->save();


 
        return redirect('welcomesiswa');
    }
 
	// method untuk edit data pegawai
	public function editdata($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$dosbing = Dosbing::find($id);
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editDosbing',['dosbing' => $dosbing]);
 
	}
 
	
	public function update($id, Request $request)
    {
        $this->validate($request,[
            'Nama_Dosen' => 'required',
            'Mata_Pelajaran' => 'required',
            'Alamat' => 'required',
            'Jabatan' => 'required'
        ]);

        $dosbing = Dosbing::find($id);
           $dosbing->Nama_Dosen = $request->Nama_Dosen;
           $dosbing->Mata_Pelajaran = $request->Mata_Pelajaran;
           $dosbing->Alamat = $request->Alamat;
           $dosbing->Jabatan = $request->Jabatan;
    
     
        $dosbing->save();
        return redirect('welcomesiswa');
    }
 
	
	public function delete($id)
    {

        Dosbing::where('id',$id)->delete();


        return redirect('welcomesiswa');
    }


}
