<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function view () {
		// return view('dashboard');//mengembalikan view
		// $user = User ::where("email", "foorbal2gmai.com")->first(); menampilkan data /mencari
		// $user = User ::findorfail(2); menampilkan data /mencari jika tidak ada eror
		// $user = User ::find(2); //menampilkan data /mencari
		// $user = User ::select("nama"); //  nama dan email aja
		 // $user = User ::all(); untuk semua data

// mengambil data dari table pegawai
    	$users = DB::table('user')->get();
 
    	// mengirim data pegawai ke view index
    	return view('welcome',['user' => $users]);
		// return response()->json($user);
    }
 //    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}
 
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('user')->insert([
			'ID' => $request->ID,
			'Nama' => $request->Nama,
			'Alamat' => $request->Alamat,
			'Jenis_Kelamin' => $request->Jenis_Kelamin,
			'Jurusan' => $request->Jurusan,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/');
 
	}
 
	// method untuk edit data pegawai
	public function edit($ID)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$user = DB::table('user')->where('ID',$ID)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['user' => $user]);
 
	}
 
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('user')->where('ID',$request->ID)->update([
			'ID' => $request->ID,
			'Nama' => $request->Nama,
			'Alamat' => $request->Alamat,
			'Jenis_Kelamin' => $request->Jenis_Kelamin,
			'Jurusan' => $request->Jurusan,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/welcome');
	}
 
	// method untuk hapus data pegawai
	public function hapus($ID)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('user')->where('ID',$No)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/welcome');
	}

	// public function detail($id)
	// {
	// 	$user = DB::table('data_game')->where('id',$id)->get();
	// 	// passing data pegawai yang didapat ke view edit.blade.php
	// 	return view('detail',['data_game' => $user]);
	// }

	public function inputdata()
	{
		
		// alihkan halaman ke halaman pegawai
		return view('inputdata');
	}
}