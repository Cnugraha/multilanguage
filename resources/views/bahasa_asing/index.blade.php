@extends ('layouts.app')

@section ('title','Translate Bahasa')

@section ('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Bahasa Asing</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('bahasa_asing.tambah') }}" class="btn btn-sm btn-success mb-3">Tambah</a>
            <a href="{{ route('bahasa_asing.inggris') }}" class="flag-icon">
                <img src="{{ asset('img/uk.png') }}" alt="English Flag">
            </a>
                <a href="{{ route('bahasa_asing.german') }}" class="flag-icon">
                    <img src="{{ asset('img/germany.png') }}" alt="German Flag">
                  </a>
                <a href="{{ route('bahasa_asing.korea') }}" class="flag-icon">
                    <img src="{{ asset('img/korea.png') }}" alt="Korea Flag">
                  </a>
                
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Bahasa Indonesia</th>
                            <th>Negara</th>
                            <th>Kalimat Asing</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;?> 
                        @foreach ($bahasa_asing as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->bahasa->kalimat }}</td>
                            <td>{{ $row->negara->nama_negara }}</td>
                            <td>{{ $row->kalimat_asing }}</td>
                            <td>
                                <a href="{{ route ('bahasa_asing.edit',$row->id) }}"class="btn btn btn-warning">Edit</a>
                                <a href="{{ route ('bahasa_asing.hapus',$row->id) }}"class="btn btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection