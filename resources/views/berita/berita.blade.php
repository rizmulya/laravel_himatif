@extends('backend')
@section('content')
<div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Postingan</h3>
            <p class="text-subtitle text-muted">The default layout.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Postingan
                    </li>
                </ol>
            </nav>
        </div>
    </div>
@endsection

@section('content')
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <p class="text-muted m-b-30 font-14">This is an experimental awesome solution for responsive tables with
                        complex data.</p>

                    <a href="" class="btn btn-primary" id="btn-tambah">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Tambah
                    </a>
                    <button type="button" class="btn btn-outline-info" id="btn-refresh">
                        <i class="fa fa-recycle" aria-hidden="true"></i>
                        Refresh
                    </button>
                    <hr>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-light-success color-success  alert-dismissible show fade">
                            {{ $message }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-light-danger color-danger alert-dismissible show fade">
                            {{ $message }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table id="post" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Postingan</th>
                                    <th>Isi Postingan</th>
                                    <th>Updated</th>
                                    <th>Created</th>
                                    <th style="min-width: 100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>td</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <div class="viewdata"></div>
@endsection
