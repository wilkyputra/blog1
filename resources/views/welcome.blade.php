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
                      <th scope="col">ID</th>
                      <th scope="col">NAMA</th>
                      <th scope="col">ALAMAT</th>
                      <th scope="col">JENIS KELAMIN</th>
                      <th scope="col">JURUSAN</th>
                      <th scope="col">IMAGE</th>
                      <th scope="col">DOSBING</th>
                      <th scope="col">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($siswa as $p)
                    <tr>
                      <td>{{ $p->id }}</td>
                      <td>{{ $p->Nama }}</td>
                      <td>{{ $p->Alamat }}</td>
                      <td>{{ $p->Jenis_Kelamin }}</td>
                      <td>{{ $p->Jurusan }}</td>
                      <td><img src="{{ url('image/'.$p->image) }}" width="150px"></td>
                      <td>
                          @foreach($dosbing as $dosen)
                            @if($p->id == $dosen->dosbing_id)
                              {{ $dosen->Nama_Dosen }}

                            @endif
                          @endforeach
                      </td>
                      <td>
                          <a href="/editdata/{{ $p->id }}">Edit</a>
                          <a href="/delete/{{ $p->id }}">Hapus</a>
                          <!-- <a href="/detail/{{ $p->ID }}">Detail</a> -->
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
<div style="color: black; text-align: center;">
Halaman : {{ $siswa->currentPage() }} <br/>
Jumlah Data : {{ $siswa->total() }} <br/>
Data Per Halaman : {{ $siswa->perPage() }} <br/>

{{ $siswa->links() }}
</div>


<br> 
<a href="/inputdata" style="background-color: black;
color: white;" 
> <button>INPUT DATA </button></a>
<br>
<br>

            </div>

        </div>
        </div>

@endsection
