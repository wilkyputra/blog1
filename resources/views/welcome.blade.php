<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }


            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}
        </style>
    </head>
    <body>       
 <!--     <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div> -->

          <!--   @endif -->

            <div class="content">
                <div class="title m-b-md">
                    DATABASE MAHASISWA
                </div>
<!-- 
                <div class="links">
                    <a href="https://laravel.com/docs">ID</a>
                    <a href="https://laracasts.com">Nama</a>
                    <a href="https://laravel-news.com">Alamat</a>
                    <a href="https://forge.laravel.com">Jenis Kelamin</a>
                    <a href="https://github.com/laravel/laravel">Jurusan</a>

                    
                </div> -->
                
                <form method="get" action="{{url('search')}}" class="form-inline my-2 my-lg-0">
<input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
                <table  style="background-color: white; 
                color: black;">
  <tr>
    <th>ID</th> 
    <th>Nama</th> 
    <th>Alamat</th> 
    <th>Jenis_Kelamin</th>
    <th>Jurusan</th>
    <th>Image</th>
    <th>Action</th>
  </tr>
  @foreach($user as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->Nama }}</td>
                                <td>{{ $p->Alamat }}</td>
                                <td>{{ $p->Jenis_Kelamin }}</td>
                                <td>{{ $p->Jurusan }}</td>
                                <td><img src="{{ url('image/'.$p->image) }}" width="150px"></td>
                                
                                <td>
                                    <a href="/editdata/{{ $p->id }}">Edit</a>
                                    <a href="/delete/{{ $p->id }}">Hapus</a>
                                    <!-- <a href="/detail/{{ $p->ID }}">Detail</a> -->
                                </td>
                            </tr>
                            @endforeach
  
<!--   <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr> -->
</table>

<div style="color: black;">
Halaman : {{ $user->currentPage() }} <br/>
Jumlah Data : {{ $user->total() }} <br/>
Data Per Halaman : {{ $user->perPage() }} <br/>

{{ $user->links() }}
</div>


<br> 
<a href="/inputdata" style="background-color: black;
color: white;" 
> <button>INPUT DATA </button></a>
<br>
<br>
<a href="/logout"><button>LOG OUT</button></a>



            </div>

        </div>
        
    </body>
</html>
