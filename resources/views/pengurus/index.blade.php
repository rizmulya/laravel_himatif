@extends('backend')
@section('content')
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Pengurus HIMATIF</div>
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

                <th>Nama Pengurus</th>
                <th>Jabatan</th>
                <th width="20%">Kata-Kata</th>
                <th width="20%">Aksi</th>
        </tr>
    </thead>


            <tbody>
                @foreach ($penguruss as $pengurus)
                <tr>

                    <td>{{ ++$i }}</td>
                    <td>{{ $pengurus->nama_pengurus }}</td>
                    <td>{{ $pengurus->jabatan }}</td>
                    <td>{{ $pengurus->katakata }}</td>
                    <td>
                    <form action="{{ route('pengurus.destroy',$pengurus->id_pengurus) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-warning" href="{{ route('pengurus.edit',$pengurus->id_pengurus) }}">Ubah</a>
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
