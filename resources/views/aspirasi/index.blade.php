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
    </div>
    <br>
    <a class="btn btn-success" href="{{ route('aspirasi.create') }}">Tambah Aspirasi</a>
    <br><br>
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

                    <td style="text-align:center">{{ ++$i }}.</td>
                    <td>{{ $aspirasi->nama_penyalur }}</td>
                    <td>{{ $aspirasi->nim }}</td>
                    <td>{{ $aspirasi->aspirasi }}</td>
                    <td style="text-align:center">
                    <form action="{{ route('aspirasi.destroy',$aspirasi->id_aspirasi) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-warning" href="{{ route('aspirasi.edit',$aspirasi->id_aspirasi) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                    <button type="submit" class="btn btn-danger" onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash"></i></button>
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
