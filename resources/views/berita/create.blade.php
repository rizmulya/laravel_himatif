@extends('backend') @section('content') <div class="container-fluid">
    <h1 class="mt-4">Berita Informatika</h1>
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-edit mr-1"></i>Berita Informatika</div>
        <div class="card-body"> @if($errors->any()) <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul> @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
            </div> @endif <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Judul Berita</strong>
                            <input type="text" name="judul_berita" class="form-control" placeholder="Masukkan Judul Berita">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Deskripsi</strong>
                            <textarea name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Tanggal Rilis</strong>
                            <input type="date" name="tanggal_rilis" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Foto Berita</strong>
                        <input type="file" name="foto_berita" class="form-control"></input>
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