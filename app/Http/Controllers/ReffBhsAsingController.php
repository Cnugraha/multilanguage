<?php

namespace App\Http\Controllers;

use App\Models\Tbl_reff_bhs_asing;
use Illuminate\Http\Request;

class ReffBhsAsingController extends Controller
{
    public function index(){
        $reff_bhs_asing = Tbl_reff_bhs_asing::get();
        return view('reff_bhs_asing.index',['reff_bhs_asing' => $reff_bhs_asing]);
    }
    
    public function tambah(){
        return view('reff_bhs_asing.form');
    }

    public function simpan(Request $request)
    {
        $data = [
            'nama_negara' => $request->nama_negara,
            'keterangan'=> $request->keterangan

        ];

        Tbl_reff_bhs_asing::create($data);

        return redirect()->route('reff_bhs_asing');
    }

    public function edit($id)
    {
        $reff_bhs_asing = Tbl_reff_bhs_asing::where('id', $id)->first();

        return view('reff_bhs_asing.form', ['reff_bhs_asing'=> $reff_bhs_asing]);

    }

    public function update($id , Request $request){

        $data = [
            'nama_negara' => $request->nama_negara,
            'keterangan'=> $request->keterangan

        ];

        Tbl_reff_bhs_asing::find($id)->update($data);
        return redirect()->route('reff_bhs_asing');
    }

    public function hapus($id){
        Tbl_reff_bhs_asing::where('id', $id)->delete();
        return redirect()->route('reff_bhs_asing');
    }
}
