@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/supplier/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Supplier</th>
                    <th>Nama Supplier</th>
                    <th>No Telp</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($supplier as $row)
					<tr>
						<td>{{$row->id_supplier}}</td>
						<td>{{$row->nama_supplier}}</td>
						<td>{{$row->no_telp}}</td>
						<td>{{$row->alamat}}</td>
						<td><a class="btn btn-primary" href="/supplier/edit/{{$row->id}}">Edit</a> | <a class="btn btn-danger" href="/supplier/destroy/{{$row->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection