@extends('backend') @section('content') <div class="container-fluid">
    <h1 class="mt-4">Pengurus himatif</h1>
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-edit mr-1"></i>Edit Pengurus himatif</div>
        <div class="card-body"> @if($errors->any()) <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul> @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
            </div> @endif <form action="{{ route('pengurus.update',$penguru->id_pengurus) }}" method="POST" enctype="multipart/form-data"> @csrf
            @method('PUT')
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Nama Pengurus</strong>
                            <input type="text" name="nama_pengurus" class="form-control" placeholder="Masukkan nama" value="{{$penguru->nama_pengurus}}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Jabatan</strong>
                            <input name="jabatan" class="form-control" placeholder="Masukkan Jabatan" value="{{$penguru->jabatan}}"></input>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Kata-Kata</strong>
                            <input name="katakata" class="form-control" placeholder="Masukkan Kata-Kata" value="{{$penguru->katakata}}"></input>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Foto Pengurus</strong>
                        <input type="file" name="foto_pengurus" class="form-control"></input>
                    </div>
                </div><br>
                <img width="170px" src="{{url('/data_file/pengurus/'.$penguru->foto_pengurus) }}">
                <p style="font-size:small;color:red">*Foto sebelum di edit*</p>
        </div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-3">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </form> 
    @endsection