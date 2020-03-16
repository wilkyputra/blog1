@extends('layouts.master')

@section('content')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="content">
                <div class="title m-b-md">
                    DATABASE MAHASISWA
                </div>             
                <form method="get" action="{{url('/')}}" class="form-inline my-2 my-lg-0">
                <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID DOSEN</th>
                      <th scope="col">NAMA DOSEN</th>
                      <th scope="col">MATA KULIAH</th>
                      <th scope="col">ALAMAT</th>
                      <th scope="col">JABATAN</th>
                      <th scope="col">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($dosbing as $dosen)
                    <tr>
                      <td>{{ $dosen->id }}</td>
                      <td>{{ $dosen->Nama_Dosen }}</td>
                      <td>{{ $dosen->Mata_Pelajaran }}</td>
                      <td>{{ $dosen->Alamat }}</td>
                      <td>{{ $dosen->Jabatan }}</td>
                      
                      <td>
                          <a href="/editdata/{{ $dosen->id }}">Edit</a>
                          <a href="/deleteDosbing/{{ $dosen->id }}">Hapus</a>
              
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>


<br> 
<a href="/inputDosbing" style="background-color: black;
color: white;" 
> <button>INPUT DATA </button></a>
<br>
<br>

            </div>

        </div>
        </div>

@endsection
