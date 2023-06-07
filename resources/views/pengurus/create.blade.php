@extends('backend') @section('content') <div class="container-fluid">
    <h1 class="mt-4">Pengurus himatif</h1>
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-edit mr-1"></i> Tambah Pengurus himatif</div>
        <div class="card-body"> @if($errors->any()) <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul> @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
            </div> @endif <form action="{{ route('pengurus.store') }}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Nama Pengurus</strong>
                            <input type="text" name="nama_pengurus" class="form-control" placeholder="Masukkan nama">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Jabatan</strong>
                            <input name="jabatan" class="form-control" placeholder="Masukkan jabatan"></input>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Kata-Kata</strong>
                            <input name="katakata" class="form-control" placeholder="Masukkan jabatan"></input>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Foto Pengurus</strong>
                        <input type="file" name="foto_pengurus" class="form-control"></input>
                    </div>
                </div>
        </div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-3">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </form> 
    @endsection