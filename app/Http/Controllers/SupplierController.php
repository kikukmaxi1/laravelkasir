<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index(){
        $supplier = Supplier::all();

        //tampilkan view supplier dan kirim datanya ke view tersebut
        return view('supplier/index',compact(['supplier']));
    }
    public function create(){
        return view('supplier/tambah');
    }
    public function store(request $request){
        //dd($request);
        Supplier::create([
            'id_supplier' => $request->id_supplier,
            'nama_supplier' => $request->nama_supplier,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat
        ]);
        return redirect('supplier');
    }
    public function edit($id){
        $supplier = Supplier::find($id);
        return view('supplier/edit',compact(['supplier']));
    }
    public function update($id, request $request){
        $supplier = Supplier::find($id);
        $supplier->update($request->except('_token','Edit'));
        return redirect('supplier');
    }
    public function destroy($id){
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect('supplier');
    }
}
