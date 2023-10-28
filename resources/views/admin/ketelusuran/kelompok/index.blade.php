@extends('admin.temp_admin.index')
@section('content')
    <div class="container-fluid" style="background: #313145">
        <div class="d-sm-flex align-items-center justify-content-between text-light">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="teks-manajemen h3 mb-0 text-light">Data Kelompok</h1>
            </div>
            <a href="/manajemen-pengguna/create" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
        </div>
        <div class="container">

            <div class="row">
                <div class="card w-100" style="overflow: auto;">
                    <div class="card-body">
                        <div class="container">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th rowspan="2">Kelompok Tani</th>
                                        <th rowspan="2">Nama Petani</th>
                                        <th rowspan="2">Tanggal Keberangkatan</th>
                                        <th rowspan="2">Timbangan Lapangan(Kg)</th>
                                        <th rowspan="2">Jmlh Janjang</th>
                                        <th rowspan="2">Tujuan PKS</th>
                                        <th colspan="3">Identitas Pengendara</th>
                                        <th colspan="3">Hasil PKS</th>
                                        <th rowspan="2">Selisih (Kg)</th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <tr>
                                        <th>No SPB</th>
                                        <th>Nama Supir</th>
                                        <th>No Kendaraan</th>
                                        <th>Bruto (Kg)</th>
                                        <th>Sortasi (Kg)</th>
                                        <th>Netto (Kg)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Karisma</td>
                                        <td>
                                            Rizky <br>
                                            Sandi <br>
                                            Dadi <br>
                                            santo
                                        </td>
                                        <td>19/08/2023</td>
                                        <td>38000</td>
                                        <td>100</td>
                                        <td>PKS Peputra Masterindo</td>
                                        <td>SPB1234567</td>
                                        <td>Rizky Firmansyah</td>
                                        <td>BM 1234 MB</td>
                                        <td>3850</td>
                                        <td>50</td>
                                        <td>3800</td>
                                        <td>0</td>
                                        <td>
                                            <a href="" class="btn btn-warning my-1 btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
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
                                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
