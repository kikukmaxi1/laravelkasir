@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data jenis</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/jenis/store">
	@csrf

	<div class="form-group">
		<label>id_jenis</label>
	<input class="form-control" type="text" name="id_jenis" placeholder="id_jenis">
	</div>
	<div class="form-group">
		<label>jenis nam</label>    		
	<input class="form-control" type="text" name="jenis_nama" placeholder="jenis_nama">
	</div>
		<label>jenis status</label>
	<input class="form-control" type="text" name="jenis_status" placeholder="jenis_status">
	</div>

	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection