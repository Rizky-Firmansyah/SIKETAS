@extends('admin.temp_superadmin.index')
@section('content')
    <div class="container-fluid" style="background: #313145">
        <div class="d-sm-flex align-items-center justify-content-between text-light">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="teks-manajemen h3 mb-0 text-light">Data Anggota</h1>
            </div>
            <a href="/data-anggota/create" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
        </div>
        <div class="container">

            <div class="row">
                <div class="card w-100" style="overflow: auto;">
                    <div class="card-body">
                        <div class="container">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Nama Petani</th>
                                        <th>Kelompok Tani</th>
                                        <th>Alamat</th>
                                        <th>No. Hp</th>
                                        <th>Umur</th>
                                        <th>Luas Lahan (ha)</th>
                                        <th>No Sertifikat Tanah</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($anggota as $item)
                                        <tr>
                                            <td>{{ $item->nama_petani }}</td>
                                            <td>{{ $item->kelompok }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->no_hp }}</td>
                                            <td>{{ $item->umur }} Thn</td>
                                            <td>{{ $item->luas_lahan }}</td>
                                            <td>{{ $item->no_sertifikat }}</td>
                                            <td>
                                                <a href="" class="btn btn-warning my-1 btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-arrow-clockwise"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                                        <path
                                                            d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                                                    </svg>
                                                </a>
                                                <a href="" class="btn btn-danger my-1 btn-sm"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                        <path
                                                            d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
