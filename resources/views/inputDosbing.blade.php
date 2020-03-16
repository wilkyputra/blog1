@extends('templateinputdata')

@section('content')
<form id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post" action="/storeDosbing">
	 {{ csrf_field() }}
<div class="form-group">
<label for="exampleInputPassword1">Nama Dosen</label>
<input type="text" class="form-control" id="Nama_Dosen" name="Nama_Dosen" placeholder="Nama Dosen">
</div>
<div class="form-group">
<label>Mata Kuliah</label>
<input type="text" class="form-control" id="Mata_Pelajaran" name="Mata_Pelajaran" placeholder="Mata Kuliah">
</div>
<div class="form-group">
<label>Alamat</label>
<input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat">
</div>
<div class="form-group">
<label>Jabatan</label>
<input type="text" class="form-control" id="Jabatan" name="Jabatan" placeholder="Jabatan">
</div>
<div class="form-group form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Accept & Agreement</label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection