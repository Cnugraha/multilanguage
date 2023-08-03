@extends('layouts.app')

@section('title','Kalimat')

@section('content')
<form action="{{ isset($bahasa) ? route('bahasa.tambah.update', $bahasa->id) : route('bahasa.tambah.simpan') }}" method="POST">
    @csrf
<div class="row">
    <div class="col-8">
         <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($bahasa) ? 'Form Edit kalimat ' : 'Form Tambah kalimat' }}</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="kalimat">kalimat</label>
                <input type="text" class="form-control" id="kalimat" name="kalimat" value="{{ isset($bahasa) ? $bahasa->kalimat : '' }}">
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