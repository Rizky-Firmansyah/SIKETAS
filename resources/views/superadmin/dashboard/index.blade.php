@extends('superadmin.temp_superadmin.index')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between text-light">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="teks-manajemen h3 mb-0" style="color: black">Dashboard</h1>
            </div>
            <a href="/data-user/create" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
        </div>
        <div class="card w-100" style="overflow: auto; background-color: #D9D9D9">
            <div class="card-body">

            </div>
        </div>
    </div>
@endsection
