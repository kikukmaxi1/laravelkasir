@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/barang/update/{{$barang->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Barang</label>
	<input class="form-control" type="text" value="{{$barang->id_barang}}" name="id_barang" placeholder="ID Barang">
	</div>
	<div class="form-group">
		<label>Nama Barang</label>
	<input class="form-control" type="text" value="{{$barang->nama_barang}}" name="nama_barang" placeholder="Nama Barang">
	</div>
	<div class="form-group">
		<label>Harga</label>
	<input class="form-control" type="text" value="{{$barang->harga}}" name="harga" placeholder="Harga">
	</div>
	<div class="form-group">
		<label>Stok</label>
	<input class="form-control" type="text" value="{{$barang->stok}}" name="stok" placeholder="Stok">
	</div>
	<div class="form-group">
		<label>Id Supplier</label>
	<input class="form-control" type="text" value="{{$barang->id_supplier}}" name="id_supplier" placeholder="ID Supplier">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
