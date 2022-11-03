@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Detail transaksi</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/transaksidetail/store">
	@csrf
	
	<div class="form-group">
		<label>id transaksi</label>
	<input class="form-control" type="text" name="id_transaksi" placeholder="id transaksi">
	</div>
	<div class="form-group">
		<label>id transaksidetail</label>
	<input class="form-control" type="text" name="id_transaksidetail" placeholder="id transaksidetail">
	</div>
	<div class="form-group">
		<label>id barang</label>
	<input class="form-control" type="text" name="id_barang" placeholder="id barang">
	</div>
	<div class="form-group">
		<label>transaksi jenis</label>
	<input class="form-control" type="text" name="transaksi_jenis" placeholder="transaksi jenis">
	</div>
	<div class="form-group">
		<label>transaksi harga</label>
	<input class="form-control" type="text" name="transaksi_harga" placeholder="transaksi harga">
	</div>
	<div class="form-group">
		<label>transaksi jumlah</label>
	<input class="form-control" type="text" name="transaksi_jumlah" placeholder="transaksi jumlah">
	</div>
	<div class="form-group">
		<label>transaksi status</label>
	<input class="form-control" type="text" name="transaksi status" placeholder="transaksi status">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection