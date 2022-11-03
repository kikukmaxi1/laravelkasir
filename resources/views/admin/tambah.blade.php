@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data ADMIN</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/admin/store">
	@csrf
	
	<div class="form-group">
		<label>username</label>
	<input class="form-control" type="text" name="username" placeholder="username">
	</div>
	<div class="form-group">
		<label>password</label>
	<input class="form-control" type="text" name="password" placeholder="password">
	</div>
	<div class="form-group">
		<label>admin_level</label>
	<input class="form-control" type="text" name="admin_level" placeholder="admin_level">
	</div>
	<div class="form-group">
		<label>admin nama</label>
	<input class="form-control" type="text" name="admin_nama" placeholder="admin_nama">
	</div>
	<div class="form-group">
		<label>admin status</label>
	<input class="form-control" type="text" name="admin_status" placeholder="admin_status">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection