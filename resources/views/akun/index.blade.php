@extends('backend')
@section('content')
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Akun Admin</div>
    <div class="card-body">
        <div class="table-responsive">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <a class="btn btn-success" href="{{ route('user.create') }}">Tambah Data Akun</a>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th width="20%">Password</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($akuns as $akun)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $akun->name }}</td>
                        <td>{{ $akun->username }}</td>
                        <td>{{ $akun->password }}</td>
                        <td>
                            <form action="{{ route('user.destroy', $akun->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-warning" href="{{ route('user.edit',$akun->id) }}">Ubah</a>
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
