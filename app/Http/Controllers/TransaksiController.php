<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
//tambah db
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = Transaksi::all();
        //dd('$pelanggan');
        return view('transaksi.index',compact(['transaksi']));
      }

    public function create(){
        $transaksi = DB::table('tbl_transaksi')
        ->get();

        return view('transaksi/tambah',compact(['transaksi']));
    }
    public function store(request $request){
        $transaksi = Transaksi::create([
            'id_transaksi' => $request->id_transaksi,
            'id_admin' => $request->id_admin,
            'transaksi_tanggal' => $request->transaksi_tanggal,
            'transaksi_nonota' => $request->transaksi_nonota,
            'transaksi_status' => $request->transaksi_status
        ]);
        echo $transaksi->id_transaksi;

        return redirect('transaksi');
    }
    public function edit($id){
        $transaksi = Transaksi::find($id);
        return view('transaksi/edit',compact(['transaksi']));
    }
    public function update($id, request $request){
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->except('_token','Edit'));
        return redirect('transaksi');
    }
    public function destroy($id){
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('transaksi');
    }
}
