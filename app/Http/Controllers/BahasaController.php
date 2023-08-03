<?php

namespace App\Http\Controllers;

use App\Models\Tbl_bahasa;
use Illuminate\Http\Request;

class BahasaController extends Controller
{
    public function index(){
        $bahasa = Tbl_bahasa::get();
        return view('bahasa.index',['bahasa' => $bahasa]);
    }
    
    public function tambah(){
        return view('bahasa.form');
    }

    public function simpan(Request $request)
    {
        $data = [
            'kalimat' => $request->kalimat,

        ];

        Tbl_bahasa::create($data);

        return redirect()->route('bahasa');
    }

    public function edit($id)
    {
        $bahasa = Tbl_bahasa::where('id', $id)->first();

        return view('bahasa.form', ['bahasa'=> $bahasa]);

    }

    public function update($id , Request $request){

        $data = [
            'kalimat' => $request->kalimat,

        ];

        Tbl_bahasa::find($id)->update($data);
        return redirect()->route('bahasa');
    }

    public function hapus($id){
        Tbl_bahasa::where('id', $id)->delete();
        return redirect()->route('bahasa');
    }
}
