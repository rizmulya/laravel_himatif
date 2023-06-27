@extends('backendnew')
@section('konten')
{{-- <h2 class="main-title">Halaman Berita</h2> --}}
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Berita Informatika</div>
    <div class="card-body">
    <div class="table-responsive">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    <a class="btn btn-success" href="{{ route('berita.create') }}"> Tambah Berita <i class="fas fa-plus"></i></a>
    <p style="margin-top:20px"></p>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr align="center">
            <th>No</th>

                <th>Judul Berita</th>
                <th>Deskripsi</th>
                <th>Tanggal Rilis</th>
                <th width="150px">Foto Berita</th>
                <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($beritas as $berita)
        <tr>
            <td>{{++$i}}</td>
            <td>{{ $berita->judul_berita}}</td>
            <td>{{ $berita->deskripsi}}</td>
            <td>{{ $berita->tanggal_rilis}}</td>
            <td><img width="150px" align="center" src="{{url('/data_file/berita/'.$berita->foto_berita) }}"></td>
            <td width="105px">
            <form action="{{ route('berita.destroy', $berita->id_berita) }}" method="post">
            @csrf
            @method('delete')
            <a class="btn btn-warning" href="{{ route('berita.edit', $berita->id_berita) }}"><i class="fa-regular fa-pen-to-square"></i></a>
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
<!-- {!! $beritas->links() !!} -->
@endsection
