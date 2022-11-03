@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Supplier</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/supplier/store">
	@csrf
	<div class="form-group">
		<label>Id Supplier</label>
		<input class="form-control" type="text" name="id_supplier" placeholder="ID Supplier">
	</div>

	<div class="form-group">
		<label>Nama Supplier</label>
	<input class="form-control" type="text" name="nama_supplier" placeholder="Nama Supplier">
	</div>
	<div class="form-group">
		<label>No Telp</label>
	<input class="form-control" type="text" name="no_telp" placeholder="No Telp">
	</div>
	<div class="form-group">
		<label>Alamat</label>
	<input class="form-control" type="text" name="alamat" placeholder="Alamat">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection