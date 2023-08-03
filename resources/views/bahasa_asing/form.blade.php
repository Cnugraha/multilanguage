@extends('layouts.app')

@section('title','Translate Bahasa')

@section('content')
<form action="{{ isset($bahasa_asing) ? route('bahasa_asing.tambah.update', $bahasa_asing->id) : route('bahasa_asing.tambah.simpan') }}" method="POST">
    @csrf
<div class="row">
    <div class="col-8">
         <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($bahasa_asing) ? 'Form Edit Bahasa ' : 'Form Tambah Bahasa' }}</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama_negara">Bahasa Indonesia</label>
                {{-- <input type="text" class="form-control" id="id_bhs_indonesia" name="id_bhs_indonesia" value="{{ isset($bahasa_asing) ? $bahasa_asing->id_bhs_indonesia : '' }}"> --}}
                <select name="id_bhs_indonesia" id="id_bhs_indonesia" class="custom-select js-example-basic-single">
                    <option value="" selected disabled hidden>--- Pilih Kalimat Bahasa Indonesia ---</option>
                    @foreach ($bahasa as $row)
                    <option value="{{ $row->id }}" {{ isset($bahasa_asing) ? ($bahasa_asing->id_bhs_indonesia == $row->id ? 'selected' : '') : '' }}>{{ $row->kalimat }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Negara</label>
                {{-- <input type="text" class="form-control" id="id_negara" name="id_negara" value="{{ isset($bahasa_asing) ? $bahasa_asing->id_negara : '' }}"> --}}
                <select name="id_negara" id="id_negara" class="custom-select js-example-basic-single">
                    <option value="" selected disabled hidden>--- Pilih Negara ---</option>
                    @foreach ($reff_bhs_asing as $row)
                    <option value="{{ $row->id }}" {{ isset($bahasa_asing) ? ($bahasa_asing->id_negara == $row->id ? 'selected' : '') : '' }}>{{ $row->nama_negara }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Kalimat Asing</label>
                <input type="text" class="form-control" id="kalimat_asing" name="kalimat_asing" value="{{ isset($bahasa_asing) ? $bahasa_asing->kalimat_asing : '' }}">
            </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
            </div>
         </div>
    </div>
</div>
</form>
@endsection