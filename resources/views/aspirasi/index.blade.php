@extends('backend')
@section('content')
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i> Data Aspirasi Informatika</div>
    <div class="card-body">
    <div class="table-responsive">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr align="center">
            <th>No</th>

                <th>Nama Penyalur</th>
                <th>NIM</th>
                <th width="20%">Aspirasi</th>
                <th width="20%">Aksi</th>
        </tr>
    </thead>


            <tbody>
                @foreach ($aspirasis as $aspirasi)
                <tr>

                    <td>{{ ++$i }}</td>
                    <td>{{ $aspirasi->nama_penyalur }}</td>
                    <td>{{ $aspirasi->nim }}</td>
                    <td>{{ $aspirasi->aspirasi }}</td>
                    <td>
                    <form action="{{ route('aspirasi.destroy',$aspirasi->id_aspirasi) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-warning" href="{{ route('aspirasi.edit',$aspirasi->id_aspirasi) }}">Ubah</a>
                    <button type="submit" class="btn btn-danger" onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                    </td>
                    </tr>
                    @endforeach
            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

@endsection
