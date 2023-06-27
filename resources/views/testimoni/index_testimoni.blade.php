@extends('backend')
@section('content')
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i> Testimoni Informatika</div>
    <div class="card-body">
        <br>
    <div class="table-responsive">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    <a class="btn btn-success" href="{{ route('testimoni.create') }}"> Tambah Testimoni <i class="fas fa-plus"></i></a>
    <br><br>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr align="center">
            <th>No</th>

                <th>Nama Alumni</th>
                <th>Keterangan Alumni</th>
                <th>Cerita Alumni</th>
                <th width="150px">Foto Alumni</th>
                <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($testimonis as $testimoni)
        <tr>
            <td>{{++$i}}</td>
            <td>{{ $testimoni->nama_alumni}}</td>
            <td>{{ $testimoni->keterangan_alumni}}</td>
            <td>{{ $testimoni->cerita}}</td>
            <td><img width="150px" align="center" src="{{url('/data_file/testimoni/'.$testimoni->foto_alumni) }}"></td>
            <td width="105px">
            <form action="{{ route('testimoni.destroy', $testimoni->id_testimoni) }}" method="post">
            @csrf
            @method('delete')
            <a class="btn btn-warning" href="{{ route('testimoni.edit', $testimoni->id_testimoni) }}"><i class="fa-regular fa-pen-to-square"></i></a>
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
<!-- {!! $testimonis->links() !!} -->
@endsection
