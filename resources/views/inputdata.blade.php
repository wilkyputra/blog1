@extends('templateinputdata')

@section('content')
<form id="file-upload-form" accept-charset="utf-8" enctype="multipart/form-data" method="post" action="/store">
	 {{ csrf_field() }}
<div class="form-group">
<label for="exampleInputPassword1">Nama</label>
<input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama">
</div>
<div class="form-group">
<label>Alamat</label>
<input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat">
</div>
<div class="form-group">
<label>Jenis Kelamin</label>
<input type="text" class="form-control" id="Jenis_Kelamin" name="Jenis_Kelamin" placeholder="Jenis Kelamin">
</div>
<div class="form-group">
<label>Jurusan</label>
<input type="text" class="form-control" id="Jurusan" name="Jurusan" placeholder="Jurusan">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
    </div>
    <div class="custom-file">
      <input id="file-upload" type="file" name="fileUpload" accept="image/*" onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
      <label class="custom-file-label" label for="file-upload" id="file-drag">Choose file</label>
    </div>
  </div>
<div class="form-group form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Accept & Agreement</label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection