<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksidetail;
use Illuminate\Support\Facades\DB;
class TransaksidetailController extends Controller
{


    public function index(){
        $transaksidetail = Transaksidetail::all();


        //mengambil data dari database menggunakan db::table() dan disimpan ke dalam $transaksidetail
        //menggunakan ->join() untuk menggabungkan tabel lainnya
        //diakhir get() untuk mengambil data array
    
        //diakhir first() jika hanya satu data yang diambil
    
       /* $transaksidetail = DB::table('tbl_transaksidetail')
                ->select('tbl_transaksidetail.*','tbl_transaksidetail.nama_transaksidetail')      
                ->join('tbl_transaksidetail', 'tbl_transaksidetail.id_transaksidetail', '=', 'tbl_transaksidetail.id_transaksidetail')
                ->get();
    */
            //tampilkan view transaksidetail dan kirim datanya ke view tersebut
        return view('transaksidetail/index',compact(['transaksidetail']));
    }
    public function create(){
        $transaksidetail = DB::table('tbl_transaksidetail')
        ->get();

        return view('transaksidetail/tambah',compact(['transaksidetail']));
    }
    public function store(request $request){
        $transaksidetail = Transaksidetail::create([
            'id_transaksi' => $request->id_transaksi,
            'id_transaksidetail' => $request->id_transaksidetail,
            'id_barang' => $request->id_barang,
            'transaksi_jenis' => $request->transaksi_jenis,
            'transaksi_harga' => $request->transaksi_harga,
            'transaksi_jumlah' => $request->transaksi_jumlah,
            'transaksi_status' => $request->transaksi_status

        ]);
        echo $transaksidetail->id_transaksidetail;

        return redirect('transaksidetail');
    }
    public function edit($id){
        $transaksidetail = Transaksidetail::find($id);
        return view('transaksidetail/edit',compact(['transaksidetail']));
    }
    public function update($id, request $request){
        $transaksidetail = Transaksidetail::find($id);
        $transaksidetail->update($request->except('_token','Edit'));
        return redirect('transaksidetail');
    }
    public function destroy($id){
        $transaksidetail = Transaksidetail::find($id);
        $transaksidetail->delete();
        return redirect('transaksidetail');
    }
}



