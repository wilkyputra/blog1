<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Siswa;

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
    	$user = Siswa::all();
 
    	// mengirim data pegawai ke view index
    	return view('welcome',['user' => $user]);
		// return response()->json($user);
    }
 //    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}
 
	// method untuk insert data ke table pegawai
	// public function store(Request $request)
	// {
	// 	// insert data ke table pegawai
	// 	DB::table('user')->insert([
	// 		'ID' => $request->ID,
	// 		'Nama' => $request->Nama,
	// 		'Alamat' => $request->Alamat,
	// 		'Jenis_Kelamin' => $request->Jenis_Kelamin,
	// 		'Jurusan' => $request->Jurusan,
	// 	]);
	// 	// alihkan halaman ke halaman pegawai
	// 	return redirect('/');
 
	// }
	public function store(Request $request)
    {
        $this->validate($request,[
            'Nama' => 'required',
            'Alamat' => 'required',
            'Jenis_Kelamin' => 'required',
            'Jurusan' => 'required',
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
 
        // Product::create([
        //     'name' => $request->name,
        //     'category' => $request->category,
        //     'fileUpload' => $request->image
        // ]);
           $files = $request->file('fileUpload');
           $destinationPath = 'image/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
           
           $user = new Siswa;
           $user->Nama = $request->Nama;
           $user->Alamat = $request->Alamat;
           $user->Jenis_Kelamin = $request->Jenis_Kelamin;
           $user->Jurusan = $request->Jurusan;
           $user->image = $insert['image'] = "$profileImage";
           $user->save();

 
        return redirect('/');
    }
 
	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$user = Siswa::find($id);
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editdata',['user' => $user]);
 
	}
 
	// update data pegawai
	// public function update(Request $request)
	// {
	// 	// update data pegawai
	// 	DB::table('user')->where('ID',$request->ID)->update([
	// 		'ID' => $request->ID,
	// 		'Nama' => $request->Nama,
	// 		'Alamat' => $request->Alamat,
	// 		'Jenis_Kelamin' => $request->Jenis_Kelamin,
	// 		'Jurusan' => $request->Jurusan,
	// 	]);
	// 	// alihkan halaman ke halaman pegawai
	// 	return redirect('/welcome');
	// }
	public function update($id, Request $request)
    {
        $this->validate($request,[
            'Nama' => 'required',
            'Alamat' => 'required',
            'Jenis_Kelamin' => 'required',
            'Jurusan' => 'required',
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $user = Siswa::find($id);

        if ($files = $request->file('fileUpload')){
            $usersImage = public_path("image/{$user->image}"); // get previous image from folder
        
         if (File::exists($usersImage)) { // unlink or remove previous image from folder
            unlink($usersImage);
        }
        $files = $request->file('fileUpload');
           $destinationPath = 'image/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
           
           $user->Nama = $request->Nama;
           $user->Alamat = $request->Alamat;
           $user->Jenis_Kelamin = $request->Jenis_Kelamin;
           $user->Jurusan = $request->Jurusan;
           $user->image = $insert['image'] = "$profileImage";
    
     }
        $user->save();
        return redirect('/');
    }
 
	// method untuk hapus data pegawai
	// public function hapus($ID)
	// {
	// 	// menghapus data pegawai berdasarkan id yang dipilih
	// 	DB::table('user')->where('ID',$No)->delete();
		
	// 	// alihkan halaman ke halaman pegawai
	// 	return redirect('/welcome');
	// }
	public function delete($id)
    {

        $gambar = Siswa::where('id',$id)->first();
        File::delete('image/'.$gambar->image);

        Siswa::where('id',$id)->delete();


        return redirect('/');
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

	public function editdata($id)
	{
		
		$user = Siswa::find($id);
       return view('editdata', ['user' => $user]);
	}
}