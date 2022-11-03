@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Supplier</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/supplier/update/{{$supplier->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Supplier</label>
	<input class="form-control" type="text" value="{{$supplier->id_supplier}}" name="id_supplier" placeholder="ID Supplier">
	</div>
	<div class="form-group">
		<label>Nama Supplier</label>
	<input class="form-control" type="text" value="{{$supplier->nama_supplier}}" name="nama_supplier" placeholder="Nama Supplier">
	</div>
	<div class="form-group">
		<label>No Telp</label>
	<input class="form-control" type="text" value="{{$supplier->no_telp}}" name="no_telp" placeholder="No telp">
	</div>
	<div class="form-group">
		<label>Alamat</label>
	<input class="form-control" type="text" value="{{$supplier->alamat}}" name="Alamat" placeholder="alamat">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
