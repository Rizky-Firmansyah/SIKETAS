@extends('admin.temp_admin.index')
@section('content')
    <div class="container-fluid" style="background: #313145">
        <div class="d-sm-flex align-items-center justify-content-between text-light">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="teks-manajemen h3 mb-0 text-light">Data Panen Petani</h1>
            </div>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="/tanggal-panen" class="btn btn-primary btn-sm mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                    <path fill-rule="evenodd"
                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg>
            </a>
            <a href="/data-petani/create/{{ $id_tanggal_panen }}" class="btn btn-primary btn-sm mb-2">Tambah Data</a>
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
                                        <th>Tonase</th>
                                        <th>Jumlah Janjang</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalTonase = 0;
                                        $totalJanjang = 0;
                                    @endphp

                                    @foreach ($join as $item)
                                        <tr>
                                            <td>{{ $item->nama_petani }}</td>
                                            <td>{{ $item->kelompok }}</td>
                                            <td>{{ $item->total_tonase_petani }}</td>
                                            <td>{{ $item->total_janjang_petani }}</td>
                                            <td>
                                                <a href="data-petani/{{ $item->id_panen_petani }}/update"
                                                    class="btn btn-warning my-1 btn-sm">
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

                                        {{-- Akumulasi total tonase dan total janjang --}}
                                        @php
                                            $totalTonase += $item->total_tonase_petani;
                                            $totalJanjang += $item->total_janjang_petani;
                                        @endphp
                                    @endforeach

                                    {{-- Tampilkan total di bagian akhir tabel --}}
                                    <tr>
                                        <td colspan="2"><strong>Total Keseluruhan</strong></td>
                                        <td><strong>{{ $totalTonase }}</strong></td>
                                        <td><strong>{{ $totalJanjang }}</strong></td>
                                        <td></td>
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
