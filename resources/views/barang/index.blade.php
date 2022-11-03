@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/barang/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>id supplier</th>
                    <th>id jenis</th>
                    <th>barang kode</th>
                    <th>barang_status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($barang as $row)
					<tr>
						<td>{{$row->id_barang}}</td>
						<td>{{$row->nama_barang}}</td>
						<td>{{$row->harga}}</td>
						<td>{{$row->id_supplier}}</td>
						<td>{{$row->id_jenis}}</td>
            <td>{{$row->barang_kode}}</td>
            <td>{{$row->barang_status}}</td>
						<td><a class="btn btn-primary" href="/barang/edit/{{$row->id}}">Edit</a> | <a class="btn btn-danger" href="/barang/destroy/{{$row->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection