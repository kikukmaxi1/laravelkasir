@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Admin</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/admin/update/{{$admin->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>username</label>
	<input class="form-control" type="text" value="{{$admin->username}}" name="username" placeholder="username">
	</div>
	<div class="form-group">
		<label>pasword</label>
	<input class="form-control" type="text" value="{{$admin->password}}" name="password" placeholder="password">
	</div>
	<div class="form-group">
		<label>admin level</label>
	<input class="form-control" type="text" value="{{$admin->admin_level}}" name="admin level" placeholder="admin level">
	</div>
	<div class="form-group">
		<label>admin nama</label>
	<input class="form-control" type="text" value="{{$admin->admin_nama}}" name="admin nama" placeholder="admin nama">
	</div>
	<div class="form-group">
		<label>admin status</label>
	<input class="form-control" type="text" value="{{$admin->admin_status}}" name="admin status" placeholder="admin status">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
