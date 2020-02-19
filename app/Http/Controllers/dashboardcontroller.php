<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Siswa;

class DashboardController extends Controller
{
	 
    public function index()
    {
    	return view('dashboard.index');
    }

    public function view () {
		
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
 
	
	public function store(Request $request)
    {
        $this->validate($request,[
            'Nama' => 'required',
            'Alamat' => 'required',
            'Jenis_Kelamin' => 'required',
            'Jurusan' => 'required',
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
 
        
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
 
	
	public function delete($id)
    {

        $gambar = Siswa::where('id',$id)->first();
        File::delete('image/'.$gambar->image);

        Siswa::where('id',$id)->delete();


        return redirect('/');
    }


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

	public function search(Request $request){
      $search = Siswa::when($request->search, function ($query) use ($request) {
                $query->where('id', 'LIKE', "%{$request->search}%")
                      ->orWhere('Nama', 'LIKE', "%{$request->search}%")
                      ->orWhere('Alamat', 'LIKE', "%{$request->search}%")
                      ->orWhere('Jenis_Kelamin', 'LIKE', "%{$request->search}%")
                      ->orWhere('Jurusan', 'LIKE', "%{$request->search}%");
                })->paginate(5);
      return view('/welcome')->with('user', ($search));
   }
}