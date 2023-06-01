@extends('backend')
@section('content')
<form action="{{ route('aspirasi.update',$aspirasi->id_aspirasi) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="row gy-4">

                <div class="col-md-12">
                  <input type="text" class="form-control" name="nama_penyalur" value="{{$aspirasi->nama_penyalur}}" placeholder="Nama" required>
                </div>
                <div>
                <input type="text" class="form-control" name="nim" value="{{$aspirasi->nim}}" placeholder="NIM" required>
              </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="aspirasi" rows="6" placeholder="Aspirasi" required>{{$aspirasi->aspirasi}}</textarea>
                </div>
                <button class="btn btn-primary">Ubah Aspirasi</button>
                  
                </div>

              </div>
            </form>
@endsection