@extends('backend')
@section('content')
<div class="container-fluid">
<h1 class="mt-4">Tambah Peminjaman Buku</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Tambah Akun Admin</li>
    </ol>
                        
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-edit mr-1"></i>Akun Admin</div>
    <div class="card-body">
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="col-md-12 text-center mt-3">
        <button type="submit" class="btn btn-success">Submit</button> 
        <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
        </div>
    </div>
</form>
</div>
@endsection