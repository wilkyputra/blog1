@extends('templateinputdata')

@section('content')
<form>
<div class="form-group">
<label for="exampleInputEmail1">ID</label>
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Nama</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nama">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Alamat</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Alamat">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Jenis Kelamin</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Jenis Kelamin">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Jurusan</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Jurusan">
</div>
<div class="form-group form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Accept & Agreement</label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection