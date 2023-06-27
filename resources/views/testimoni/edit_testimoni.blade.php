@extends('backend') @section('content') <div class="container-fluid">
    <h1 class="mt-4">Testimoni Himatif</h1>
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-edit mr-1"></i> Ubah Testimoni Himatif</div>
        <div class="card-body"> @if($errors->any()) <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul> @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
            </div> @endif 
            <form action="{{ route('testimoni.update',$testimoni->id_testimoni) }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Nama Alumni</strong>
                            <input type="text" name="nama_alumni" class="form-control" placeholder="Masukkan Nama" value="{{$testimoni->nama_alumni}}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Keterangan Alumni</strong>
                            <input name="keterangan_alumni" class="form-control" placeholder="Masukkan Keterangan" value="{{$testimoni->keterangan_alumni}}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Cerita Alumni</strong>
                            <textarea name="cerita" class="form-control" placeholder="Masukkan Cerita">{{$testimoni->cerita}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Foto Alumni</strong>
                        <input type="file" name="foto_alumni" class="form-control">
                    </div>
                </div><br>
                <img width="170px" src="{{url('/data_file/testimoni/'.$testimoni->foto_alumni) }}">
                <p style="font-size:small;color:red">*Foto sebelum di edit*</p>
        </div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-3">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </form> 
    @endsection