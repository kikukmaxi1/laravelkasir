@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/barang/store">
	@csrf
	<div class="form-group">
		<label>Nama Barang</label>
	<input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang">
	</div>
	<div class="form-group">
		<label>Harga</label>
	<input class="form-control" type="text" name="harga" placeholder="Harga">
	</div>
	<div class="form-group">
		<label>id_supplier</label>
	<input class="form-control" type="text" name="id_barang" placeholder="id_barang">
	</div>
	<div class="form-group">
		<label>id_jenis</label>
	<input class="form-control" type="text" name="id_jenis" placeholder="id_jenis">
	</div>
	<div class="form-group">
		<label>barang_kode</label>
	<input class="form-control" type="text" name="barang_kode" placeholder="barang_kode">
	</div>
	<div class="form-group">
		<label>barang_status</label>
	<input class="form-control" type="text" name="barang_status" placeholder="barang_status">
	</div>
	<div class="form-group">
		<label>Id Supplier</label>
		<select class="form-control" name="id_supplier">
			<option>Silahkan dipilih</option>
			@foreach($supplier as $row)
			<option value="{{$row->id_supplier}}">{{$row->nama_supplier}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection