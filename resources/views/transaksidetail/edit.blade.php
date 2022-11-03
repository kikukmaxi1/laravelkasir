@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data transaksidetail</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/transaksidetail/update/{{$transaksidetail->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>id_transaksidetail</label>
	<input class="form-control" type="text" value="{{$transaksidetail->id_transaksidetail}}" name="id_transaksidetail" placeholder="id_transaksidetail">
	</div>
	<div class="form-group">
		<label>id transaksi</label>
	<input class="form-control" type="text" value="{{$transaksidetail->id_transaksi}}" name="id_transaksi" placeholder="id_transaksi">
	</div>
	<div class="form-group">
		<label>id barang</label>
	<input class="form-control" type="text" value="{{$transaksidetail->id_barang}}" name="id_barang" placeholder="id_barang">
	</div>
	<div class="form-group">
		<label>transaksi jenis</label>
	<input class="form-control" type="text" value="{{$transaksidetail->transaksi_jenis}}" name="transaksi_jenis" placeholder="transaksi_jenis">
	</div>
	<div class="form-group">
		<label>transaksidetail harga</label>
	<input class="form-control" type="text" value="{{$transaksidetail->transaksi_harga}}" name="transaksidetail_harga" placeholder="transaksidetail_harga">
	</div>
	<div class="form-group">
		<label>transaksidetail status</label>
	<input class="form-control" type="text" value="{{$transaksidetail->transaksi_jumlah}}" name="transaksidetail_harga" placeholder="transaksidetail_harga">
	</div>
	<div class="form-group">
		<label>transaksidetail status</label>
	<input class="form-control" type="text" value="{{$transaksidetail->transaksi_status}}" name="transaksidetail_status" placeholder="transaksidetail_status">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
