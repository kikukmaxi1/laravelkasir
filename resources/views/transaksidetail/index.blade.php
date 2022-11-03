@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/transaksidetail/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id transaksdetail</th>
                    <th>id transaksi</th>
                    <th>id barang</th>
                    <th>jenis</th>
                    <th>harga</th>
                    <th>jumlah</th>
                    <th>status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksidetail as $row)
					<tr>
						<td>{{$row->id_transaksidetail}}</td>
						<td>{{$row->id_transaksi}}</td>
						<td>{{$row->id_barang}}</td>
						<td>{{$row->transaksi_jenis}}</td>
            <td>{{$row->transaksi_harga}}</td>
            <td>{{$row->transaksi_jumlah}}</td>
            <td>{{$row->transaksi_status}}</td>
						<td><a class="btn btn-primary" href="/transaksidetail/edit/{{$row->id}}">Edit</a> | <a class="btn btn-danger" href="/transaksidetail/destroy/{{$row->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection