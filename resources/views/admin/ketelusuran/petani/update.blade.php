@extends('admin.temp_admin.index')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-light">Form Tambah Data Panen</h1>
        </div>

        <div class="d-sm-flex align-items-center justify-content-between">
            <a href="/data-petani" class="btn btn-primary btn-sm mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                    <path fill-rule="evenodd"
                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="card w-100">

                    <div class="card-body">
                        <form action="/data-petani/{{ $panen->id_panen_petani }}/updateData" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Kelompok</label>
                                <select class="custom-select" name="kelompok" disabled>
                                    <option selected>Pilih Nama Kelompok</option>
                                    @foreach ($kelompok as $item)
                                        @if ($item->kelompok !== 'Super Admin')
                                            <option value="{{ $item->id_kelompok }}"
                                                {{ $item->id_kelompok == $panen->id_kelompok ? 'selected' : '' }}>
                                                {{ $item->kelompok }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Petani</label>
                                <select class="custom-select" name="anggota" disabled>
                                    <option selected>Pilih Nama Petani</option>
                                    @foreach ($anggota as $item)
                                        <option value="{{ $item->id_anggota }}"
                                            {{ $item->id_anggota == $panen->id_anggota ? 'selected' : '' }}>
                                            {{ $item->nama_petani }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- Panen 1 --}}
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Panen 1</label>
                                        <input type="date" class="form-control" name="tgl_panen1"
                                            value="{{ $panen->tgl_panen1 }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Tonase Panen 1</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Tonase Panen 1"
                                            name="tonase_panen1" value="{{ $panen->tonase_panen1 }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Jumlah Janjang Panen 1</label>
                                        <input type="text" class="form-control"
                                            placeholder="Masukkan Jumlah Janjang Panen 1" name="janjang_panen1"
                                            value="{{ $panen->jumlah_janjang1 }}">
                                    </div>
                                </div>
                            </div>
                            {{-- Panen 2 --}}
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Panen 2</label>
                                        <input type="date" class="form-control"
                                            name="tgl_panen2"value="{{ $panen->tgl_panen2 }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Tonase Panen 2</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Tonase Panen 2"
                                            name="tonase_panen2"value="{{ $panen->tonase_panen2 }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Jumlah Janjang Panen 2</label>
                                        <input type="text" class="form-control"
                                            placeholder="Masukkan Jumlah Janjang Panen 2"
                                            name="janjang_panen2"value="{{ $panen->jumlah_janjang2 }}">
                                    </div>
                                </div>
                            </div>
                            {{-- Panen 3 --}}
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Panen 3</label>
                                        <input type="date" class="form-control"
                                            name="tgl_panen3"value="{{ $panen->tgl_panen3 }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Tonase Panen 3</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Tonase Panen 3"
                                            name="tonase_panen3"value="{{ $panen->tonase_panen3 }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Jumlah Janjang Panen 3</label>
                                        <input type="text" class="form-control"
                                            placeholder="Masukkan Jumlah Janjang Panen 3"
                                            name="janjang_panen3"value="{{ $panen->jumlah_janjang3 }}">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" value="submit" class="btn btn-primary">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
