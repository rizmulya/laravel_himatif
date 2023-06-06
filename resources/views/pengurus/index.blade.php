@extends('backend')
@section('content')
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i> Data Pengurus HIMATIF</div>
    <div class="card-body">
    <div class="table-responsive">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <br>
        <a class="btn btn-success" href="{{ route('pengurus.create') }}"> Tambah Pengurus <i class="fas fa-plus"></i></a><br><br>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr align="center">
            <th>No</th>
                <th>Foto</th>
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
                    <td>
                        <img  width="150px" align="center" src="{{ url('/data_file/pengurus/'. $pengurus->foto_pengurus ) }}">
                    </td>
                    <td class="align-middle">{{ $pengurus->nama_pengurus }}</td>
                    <td class="align-middle">{{ $pengurus->jabatan }}</td>
                    <td class="align-middle">{{ $pengurus->katakata }}</td>
                    <td style="text-align: center;">
                    <form action="{{ route('pengurus.destroy',$pengurus->id_pengurus) }}" method="POST" >
                    @csrf
                    @method('DELETE')
                        <a class="btn btn-warning" href="{{ route('pengurus.edit',$pengurus->id_pengurus) }}"><i class="fa-regular fa-pen-to-square"></i></a>
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
