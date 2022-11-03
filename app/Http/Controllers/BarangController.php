<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

//tambah db
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{


    public function index(){
        //$barang = Barang::all();


        //mengambil data dari database menggunakan db::table() dan disimpan ke dalam $barang
        //menggunakan ->join() untuk menggabungkan tabel lainnya
        //diakhir get() untuk mengambil data array
    
        //diakhir first() jika hanya satu data yang diambil
    
        $barang = DB::table('tbl_barang')
                ->select('tbl_barang.*','tbl_supplier.nama_supplier')      
                ->join('tbl_supplier', 'tbl_supplier.id_supplier', '=', 'tbl_barang.id_supplier')
                ->get();
    
            //tampilkan view barang dan kirim datanya ke view tersebut
        return view('barang/index',compact(['barang']));
    }
    public function create(){
        $supplier = DB::table('tbl_supplier')
        ->get();

        return view('barang/tambah',compact(['supplier']));
    }
    public function store(request $request){
        $barang = Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'id_supplier' => $request->id_supplier,
            'id_barang' => $request->id_barang,
            'id_jenis' => $request->id_jenis,
            'barang_kode' => $request->barang_kode,
            'barang_status' => $request->barang_status

        ]);
        echo $barang->id_barang;

        return redirect('barang');
    }
    public function edit($id){
        $barang = Barang::find($id);
        return view('barang/edit',compact(['barang']));
    }
    public function update($id, request $request){
        $barang = Barang::find($id);
        $barang->update($request->except('_token','Edit'));
        return redirect('barang');
    }
    public function destroy($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('barang');
    }
}

