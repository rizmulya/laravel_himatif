@extends('backend')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Aspirasi Informatika</h1>
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-edit mr-1"></i>Berita Informatika</div>
        <div class="card-body"> @if($errors->any()) <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul> @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
            </div> @endif <form action="{{ route('aspirasi.store') }}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Nama Penyalur</strong>
                            <input type="text" name="nama_penyalur" class="form-control" placeholder="Masukkan Nama Penyalur">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>NIM</strong>
                            <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM Penyalur">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Aspirasi</strong>
                            <textarea name="aspirasi" class="form-control" placeholder="Masukkan Aspirasi"></textarea>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-3">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </form> 
</div> 
@endsection