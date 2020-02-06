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
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

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
                <table  style="background-color: black; 
                color: white;">
  <tr>
    <th>ID</th> 
    <th>Nama</th> 
    <th>Alamat</th> 
    <th>Jenis_Kelamin</th>
    <th>Jurusan</th> 
  </tr>
  @foreach($user ?? '' as $p)
                            <tr>
                                <td>{{ $p->ID }}</td>
                                <td>{{ $p->Nama }}</td>
                                <td>{{ $p->Alamat }}</td>
                                <td>{{ $p->Jenis_Kelamin }}</td>
                                <td>{{ $p->Jurusan }}</td>
                                <td>
                                    <a href="/edit/{{ $p->ID }}">Edit</a>
                                    <a href="/hapus/{{ $p->ID }}">Hapus</a>
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
<br><button>
<a href="/inputdata" style="background-color: black;
color: white;" 
> INPUT DATA </button>



            </div>
        </div>
    </body>
</html>
