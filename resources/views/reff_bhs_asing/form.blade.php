@extends('layouts.app')

@section('title','kategori bahasa')

@section('content')
<form action="{{ isset($reff_bhs_asing) ? route('reff_bhs_asing.tambah.update', $reff_bhs_asing->id) : route('reff_bhs_asing.tambah.simpan') }}" method="POST">
    @csrf
<div class="row">
    <div class="col-8">
         <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($reff_bhs_asing) ? 'Form Edit Bahasa ' : 'Form Tambah Bahasa' }}</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nama_negara">Nama Negara</label>
                <input type="text" class="form-control" id="nama_negara" name="nama_negara" value="{{ isset($reff_bhs_asing) ? $reff_bhs_asing->nama_negara : '' }}">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ isset($reff_bhs_asing) ? $reff_bhs_asing->keterangan : '' }}">
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