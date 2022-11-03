@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data jenis</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/jenis/update/{{$jenis->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>id jenis</label>
	<input class="form-control" type="text" value="{{$jenis->id_jenis}}" name="id_jenis" placeholder="ID jenis">
	</div>
	<div class="form-group">
		<label>Nama jenis</label>
	<input class="form-control" type="text" value="{{$jenis->jenis_nama}}" name="nama_jenis" placeholder="Nama jenis">
	</div>
	<div class="form-group">
		<label>Harga</label>
	<input class="form-control" type="text" value="{{$jenis->jenis_status}}" name="harga" placeholder="Harga">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
