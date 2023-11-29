@extends('admin.temp_admin.index')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-light">Form Tambah Data Panen Kelompok</h1>
        </div>

        <div class="d-sm-flex align-items-center justify-content-between">
            <a href="/data-panen-kelompok" class="btn btn-primary btn-sm mb-2">
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
                        <form action="/data-panen-kelompok/createData" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Kelompok</label>
                                <select class="custom-select" name="id_kelompok" id="nama_kelompok">
                                    <option selected disabled>Pilih Kelompok</option>
                                    @foreach ($kelompok as $item)
                                        @if ($item->kelompok !== 'Super Admin')
                                            <option value="{{ $item->id_kelompok }}">{{ $item->kelompok }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tanggal Panen</label>
                                <select class="custom-select" name="id_panen_petani" id="tanggal_panen" disabled>
                                    <option selected disabled>Pilih Tanggal Panen</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Total Tonase</label>
                                        <input type="text" class="form-control" value="" name="total_tonase"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Total Janjang</label>
                                        <input type="text" class="form-control" value="" name="total_janjang"
                                            disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tanggal Keberangkatan</label>
                                <input type="date" class="form-control" name="tanggal_keberangkatan">
                            </div>

                            <button type="submit" value="submit" class="btn btn-primary">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        var tanggalPanenOptions = '';
        @foreach ($tanggal_panen as $item)
            tanggalPanenOptions +=
                '<option value="{{ $item->id_tanggal_panen }}" data-kelompok="{{ $item->id_kelompok }}">{{ $item->tanggal->format('d F Y') }}</option>';
        @endforeach

        document.getElementById('nama_kelompok').addEventListener('change', function() {
            var selectedKelompok = this.value;
            var tanggalPanenDropdown = document.getElementById('tanggal_panen');

            // Kosongkan opsi sebelum menambahkan yang baru
            tanggalPanenDropdown.innerHTML = '<option selected disabled>Pilih Tanggal Panen</option>';

            // Tambahkan opsi berdasarkan kelompok yang dipilih
            tanggalPanenDropdown.innerHTML += tanggalPanenOptions;

            // Filter opsi berdasarkan kelompok yang dipilih
            for (var i = 0; i < tanggalPanenDropdown.options.length; i++) {
                var option = tanggalPanenDropdown.options[i];
                if (option.getAttribute('data-kelompok') == selectedKelompok || option.getAttribute(
                        'data-kelompok') == null) {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
            }

            // Aktifkan dropdown tanggal panen
            tanggalPanenDropdown.removeAttribute('disabled');
        });
    </script>
@endsection
