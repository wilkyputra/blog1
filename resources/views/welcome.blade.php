<!doctype html>
<html lang="en">

<head>
  <title>Hello, world!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="#0">
              <i class="material-icons">dashboard</i>
              <p>Itel</p>
            </a>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">notifications</i> Notifications
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
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
                      <th scope="col">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
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
                  </tbody>
                </table>
<div style="color: black; text-align: center;">
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
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
</body>

</html>      
