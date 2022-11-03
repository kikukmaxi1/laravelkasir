@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data transaksi</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/transaksi/update/{{$transaksi->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id transaksi</label>
	<input class="form-control" type="text" value="{{$transaksi->id_transaksi}}" name="id_transaksi" placeholder="ID transaksi">
	</div>
	<div class="form-group">
		<label>Nama transaksi</label>
	<input class="form-control" type="text" value="{{$transaksi->id_transaksi}}" name="id_transaksi" placeholder="Nama transaksi">
	</div>
	<div class="form-group">
		<label>transaksi_tanggal</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_tanggal}}" name="transaksi_tanggal" placeholder="transaksi_tanggal">
	</div>
	<div class="form-group">
		<label>transaksi_nonota</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_nonota}}" name="transaksi_nonota" placeholder="transaksi_nonota">
	</div>
	<div class="form-group">
		<label>Id Supplier</label>
	<input class="form-control" type="text" value="{{$transaksi->transaksi_status}}" name="transaksi_status" placeholder="ID Supplier">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
