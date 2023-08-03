@extends ('layouts.app')

@section ('title','Kalimat')

@section ('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Menambahkan Kalimat</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('bahasa.tambah') }}" class="btn btn-sm btn-success mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kalimat</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;?> 
                        @foreach ($bahasa as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->kalimat }}</td>
                            <td>
                                <a href="{{ route ('bahasa.edit',$row->id) }}"class="btn btn-warning">Edit</a>
                                <a href="{{ route ('bahasa.hapus',$row->id) }}"class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection