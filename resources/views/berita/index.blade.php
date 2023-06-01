@extends('backend')
@section('content')
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Berita Informatika</div>
    <div class="card-body">
    <div class="table-responsive">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    <br>
    <a class="btn btn-success" href="{{ route('berita.create') }}"> Tambah Berita </a><br><br>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr align="center">
            <th>No</th>

                <th>Judul Berita</th>
                <th>Deskripsi</th>
                <th>Tanggal Rilis</th>
                <th width="150px">Foto Berita</th>
        </tr>
    </thead>
    <tbody>
        @foreach($beritas as $berita)
        <tr>
            <td>{{++$i}}</td>
            <td>{{ $berita->judul_berita}}</td>
            <td>{{ $berita->deskripsi}}</td>
            <td>{{ $berita->tanggal_rilis}}</td>
            <td><img width="150px" align="center" src="{{url('/data_file/'.$berita->foto_berita) }}"></td>
        </tr>
        @endforeach
    </tbody>
    </table>
        </div>
    </div>
</div>

@endsection
