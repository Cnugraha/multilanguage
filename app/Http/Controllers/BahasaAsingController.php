<?php

namespace App\Http\Controllers;

use App\Models\Tbl_bahasa;
use App\Models\Tbl_bahasa_asing;
use App\Models\Tbl_reff_bhs_asing;
use Illuminate\Http\Request;

class BahasaAsingController extends Controller
{
    public function index()
    {
        $bahasa_asing = Tbl_bahasa_asing::get();
        return view('bahasa_asing.index',['bahasa_asing' => $bahasa_asing]);
    }
    
    public function tambah()
    {
        $bahasa = Tbl_bahasa::get();
        $reff_bhs_asing = Tbl_reff_bhs_asing::get();
        return view('bahasa_asing.form', [
            'bahasa' => $bahasa,
            'reff_bhs_asing' => $reff_bhs_asing
        ]);
    }

    public function simpan(Request $request)
    {
        $data = [
            'id_bhs_indonesia' => $request->id_bhs_indonesia,
            'id_negara'=> $request->id_negara,
            'kalimat_asing'=> $request->kalimat_asing

        ];

        Tbl_bahasa_asing::create($data);

        return redirect()->route('bahasa_asing');
    }

    public function edit($id)
    {
        $bahasa_asing = Tbl_bahasa_asing::where('id', $id)->first();
        $bahasa = Tbl_bahasa::get();
        $reff_bhs_asing = Tbl_reff_bhs_asing::get();
        return view('bahasa_asing.form', [
            'bahasa_asing'=> $bahasa_asing,
            'bahasa'=> $bahasa,
            'reff_bhs_asing'=> $reff_bhs_asing
        ]);

    }

    public function update($id , Request $request){

        $data = [
            'id_bhs_indonesia' => $request->id_bhs_indonesia,
            'id_negara'=> $request->id_negara,
            'kalimat_asing'=> $request->kalimat_asing
        ];

        Tbl_bahasa_asing::find($id)->update($data);
        return redirect()->route('bahasa_asing');
    }

    public function hapus($id)
    {
        Tbl_bahasa_asing::where('id', $id)->delete();
        return redirect()->route('bahasa_asing');
    }

    public function inggris()
    {
        $bahasa_asing = Tbl_bahasa_asing::where('id_negara','7')->get();
        return view('bahasa_asing.index',['bahasa_asing' => $bahasa_asing]);
        // dd($bahasa_asing);
    }
    public function german()
    {
        $bahasa_asing = Tbl_bahasa_asing::where('id_negara','8')->get();
        return view('bahasa_asing.index',['bahasa_asing' => $bahasa_asing]);
        // dd($bahasa_asing);
    }
    public function korea()
    {
        $bahasa_asing = Tbl_bahasa_asing::where('id_negara','9')->get();
        return view('bahasa_asing.index',['bahasa_asing' => $bahasa_asing]);
        //dd($bahasa_asing);
    }

}
