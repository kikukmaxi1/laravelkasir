<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Jenis;
class JenisController extends Controller
{


    public function index(){
        $jenis = Jenis::all();


        //mengambil data dari database menggunakan db::table() dan disimpan ke dalam $jenis
        //menggunakan ->join() untuk menggabungkan tabel lainnya
        //diakhir get() untuk mengambil data array
    
        //diakhir first() jika hanya satu data yang diambil
    
       // $jenis = DB::table('tbl_jenis')
         //       ->select('tbl_jenis.*','tbl_jenis.nama_jenis')      
           //     ->join('tbl_jenis', 'tbl_jenis.id_jenis', '=', 'tbl_jenis.id_jenis')
             //   ->get();
    
            //tampilkan view jenis dan kirim datanya ke view tersebut
        return view('jenis/index',compact(['jenis']));
    }
    public function create(){
        $jenis = DB::table('tbl_jenis')
        ->get();

        return view('jenis/tambah',compact(['jenis']));
    }
    public function store(request $request){
        $jenis = Jenis::create([
            'id_jenis' => $request->id_jenis,
            'jenis_nama' => $request->jenis_nama,
            'jenis_status' => $request->jenis_status

        ]);
        echo $jenis->id_jenis;

        return redirect('jenis');
    }
    public function edit($id){
        $jenis = Jenis::find($id);
        return view('jenis/edit',compact(['jenis']));
    }
    public function update($id, request $request){
        $jenis = Jenis::find($id);
        $jenis->update($request->except('_token','Edit'));
        return redirect('jenis');
    }
    public function destroy($id){
        $jenis = Jenis::find($id);
        $jenis->delete();
        return redirect('jenis');
    }
}


