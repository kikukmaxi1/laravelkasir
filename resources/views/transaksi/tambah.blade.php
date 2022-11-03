@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data transaksi</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/transaksi/store">
	@csrf

	<div class="form-group">
		<label>id_transaksi</label>
	<input class="form-control" type="text" name="id_transaksi" placeholder="id_transaksi">
	</div>
	<div class="form-group">
		<label>id admin</label>
	<input class="form-control" type="text" name="id_admin" placeholder="id_admin">
	</div>
		<label>transaksi_tanggal</label>
	<input class="form-control" type="text" name="transaksi_tanggal" placeholder="transaksi_tanggal">
	</div>
	<div class="form-group">
		<label>transaksi_nonota</label>
	<input class="form-control" type="text" name="transaksi_nonota" placeholder="transaksi_nonota">
	</div>
	<div class="form-group">
		<label>transaksi_status</label>
	<input class="form-control" type="text" name="transaksi_status" placeholder="transaksi_status">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection