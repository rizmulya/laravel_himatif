@extends('backend') @section('content') <div class="container-fluid">
    <h1 class="mt-4">Berita Informatika</h1>
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-edit mr-1"></i>Edit Berita Informatika</div>
        <div class="card-body"> @if($errors->any()) <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul> @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
            </div> @endif <form action="{{ route('berita.update', $beritum->id_berita) }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Judul Berita</strong>
                            <input type="text" name="judul_berita" class="form-control" placeholder="Masukkan Judul Berita" value="{{$beritum->judul_berita}}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Deskripsi</strong>
                            <textarea name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi">{{$beritum->deskripsi}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Tanggal Rilis</strong>
                            <input type="date" name="tanggal_rilis" class="form-control" value="{{$beritum->tanggal_rilis}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Foto Berita</strong>
                        <input type="file" name="foto_berita" class="form-control"></input>
                    </div>
                </div><br>
                <img width="170px" src="{{url('/data_file/berita/'.$beritum->foto_berita) }}">
                <p style="font-size:small;color:red">*Foto sebelum di edit*</p>
        </div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-3">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </form> 
    @endsection